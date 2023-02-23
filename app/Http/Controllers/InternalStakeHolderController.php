<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InternalStakeHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getInternalStakeHolders() {
        $internalStakeHolders=['First','Second','Third'];
        return view('internalStakeholderList', ['internalStakeHolders' =>
                  $internalStakeHolders]);
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
    public function getInternalStakeHolder(Request $request){
        //echo $name = Request::registration()->get('name');
        $email='miguelfoko@gmail.com';
        $password='wwwwwwwww';
        $results = DB::select('select * from internalstakeholder' );
        return redirect('internalStakeholderList')->with('internalStakeHolders', $results);
    }
}
