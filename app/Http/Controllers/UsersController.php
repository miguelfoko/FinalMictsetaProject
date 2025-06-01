<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use File;
use Auth; 

//Added dependencies
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    
    /**
     * Create a user controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    /**
    * Display a listing of users.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::where('user_status','<>','Deleted')->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
    * Show the form for creating a user.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //Generation of hash token for email verification
        $activation_token = bin2hex(random_bytes(16));
        $activation_hash = hash("sha256", $activation_token);
        //End generation of hash token for email verification
        $request['account_activation_hash'] = $activation_hash;
        $request['user_status'] = 'Disabled';
        $request['is_admin'] = false;
        $readablePassword = $request->input('password');
        $hashPassword = Hash::make($readablePassword);
        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->user_status=$request->input('user_status');
        $user->is_admin=$request->input('is_admin');
        $user->account_activation_hash=$activation_hash;
        $user->password=$hashPassword;
        $userSaved = $user->save();
        
        if ($userSaved == true) {
            $title = 'Activation link';
            $body = 'Thank you for your registration. <br> Click <a href="'.env("APP_URL").'/activate_account/'.$activation_token.'"> here </a> to activate your account.'; 
            
            //$title="Title1";
            //$body="Body1";
            Mail::to($user->email)
                    //->cc('fosimilan@gmail.com')
                    //->bcc('fosimilan@gmail.com')
                    ->send(new WelcomeMail($title, $body));
                //;
            
            return redirect()->route('users.index')->with('success','Registration successful. The created user should check his email to activate his account.');
        }
        else {
            return redirect()->route('users.index')->with('error','Please check if the user doesn\'t already have an account with this email.');
        }
    } 

    /**
    * Display the specified resource.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function show(User $id)
    {
        $users = User::find($id);

        return view('users.show',compact('users'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $users = User::findOrFail($decryptedId);
        return view('admin.users.edit',compact('users')); 
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function validateUser(User $id)
    {
        return view('admin.users.index', compact('users'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //$decryptedId = Crypt::decrypt($id);
        $users = User::findOrFail($id);

        $rules = [
            'name' => 'required', 'string', 'max:255'];

        //Vérifie si l'email a été modifiée
        if ($request->input('email') !== $users->email) {
            $rules['email'] = 'required|email|unique:users,email';
        }

        $validated =  $request->validate($rules);

        //Mise à jour des champs
        $users->name=$request->input('name');

        if ($request->input('email') !== $users->email) {
            $users->email=$request->input('email');
        }

        $users->save();
        $users->fill($request->post())->save();

        return redirect()->route('users.index')->with('success','User Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {
        $decryptedId = Crypt::decrypt($id);
        $users = User::findOrFail($decryptedId);
        $request['user_status'] = 'Deleted';
        $users->user_status=$request->input('user_status');
        $users->email=$users->email."_deleted";
        $users->save();
        $users->fill($request->post())->save();

        return redirect()->route('users.index')->with('success','User has been deleted successfully');
    }
}
