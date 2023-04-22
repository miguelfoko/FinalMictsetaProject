<?php

namespace App\Http\Controllers;
use App\Models\RegionalLocations;
use Auth;
use Illuminate\Http\Request;

class RegionalLocationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionallocations = RegionalLocations::orderBy('id','desc')->paginate(5);
        return view('admin.contactus.regionallocations.index', compact('regionallocations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactus.regionallocations.create');
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
            'region' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            //Newly added
            'principal'=>'required',
            'principalAssistant'=>'required',
            'principalEmails'=>'required',
            'principalAssistantEmails'=>'required',

        ]);

        $regionallocations = new RegionalLocations;
        $regionallocations->region=$request->input('region');
        $regionallocations->address=$request->input('address');
        $regionallocations->city=$request->input('city');
        $regionallocations->phone=$request->input('phone');
        $regionallocations->latitude=$request->input('latitude');
        $regionallocations->longitude=$request->input('longitude');
        $regionallocations->principal=$request->input('principal');
        $regionallocations->principalEmails=$request->input('principalEmails');
        $regionallocations->principalAssistant=$request->input('principalAssistant');
        $regionallocations->principalAssistantEmails=$request->input('principalAssistantEmails');
        $regionallocations->websiteAddress=$request->input('websiteAddress');
        $regionallocations->user_id=Auth::user()->id;
        $regionallocations->save();
        return redirect()->route('regionallocations.index')->with('success','Regional Location has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regionallocations = RegionalLocations::find($id);

        return view('regionallocations.show',compact('regionallocations')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regionallocations = RegionalLocations::find($id);
        return view('admin.contactus.regionallocations.edit',compact('regionallocations'));

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

        $request->validate([
            'region' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            //Newly added
            'principal'=>'required',
            'principalAssistant'=>'required',
            'principalEmails'=>'required',
            'principalAssistantEmails'=>'required',
        ]);

        $regionallocations = RegionalLocations::find($id);

        $regionallocations->region=$request->input('region');
        $regionallocations->address=$request->input('address');
        $regionallocations->city=$request->input('city');
        $regionallocations->phone=$request->input('phone');
        $regionallocations->latitude=$request->input('latitude');
        $regionallocations->longitude=$request->input('longitude');
        $regionallocations->principal=$request->input('principal');
        $regionallocations->principalEmails=$request->input('principalEmails');
        $regionallocations->principalAssistant=$request->input('principalAssistant');
        $regionallocations->principalAssistantEmails=$request->input('principalAssistantEmails');
        $regionallocations->websiteAddress=$request->input('websiteAddress');
        $regionallocations->user_id=Auth::user()->id;
        $regionallocations->save();
        
        $regionallocations->fill($request->post())->save();
        return redirect()->route('regionallocations.index')->with('success','Regional Location has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regionallocations = RegionalLocations::find($id);
        $regionallocations->delete();
        return redirect()->route('regionallocations.index')->with('success','Regional Location has been deleted successfully');
    }
}
