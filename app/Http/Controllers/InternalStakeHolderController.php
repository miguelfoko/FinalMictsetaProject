<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use App\Models\Post;

class InternalStakeHolderController extends Controller
{
    //
    public function getInternalStakeHolders() {
        $internalStakeHolders=['First','Second','Third'];
        return view('internalStakeholderList', ['internalStakeHolders' =>
                  $internalStakeHolders]);
    }

    public function setInternalStakeHolder(){
        $name='miguel1';
        $surname='miguel2';
        $email='miguel3';
        $password='miguel4';
        DB::insert('INSERT INTO internalstakeholder(name, surname, email, password) values (?,?,?,?)',array(
            $name, $surname, $email, $password
        ));
        return "Insert Successful";
    }

    public function insertInternalStakeHolder(Request $request){
        //echo $name = Request::registration()->get('name');
        $name=$request->name;
        $surname=$request->surname;
        $email=$request->email;
        $password=$request->password;
        DB::insert('INSERT INTO internalstakeholder(name, surname, email, password) values (?,?,?,?)',array(
            $name, $surname, $email, $password
        ));
        return redirect('registration')->with('status', 'The internal stakeholder has been inserted successfully');
    }
}
