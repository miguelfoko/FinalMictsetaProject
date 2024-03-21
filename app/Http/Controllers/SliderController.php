<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Slider;
use File;
use Form;
class SliderController extends Controller
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
   // add to the top of your controller



// index function
public function index()
    {
        $sliders = Slider::orderby('id', 'desc')->paginate(10);
        return view('sliders.index', compact('sliders'));
    }

// create function
public function create()
{
    return  view ('sliders.create');
}

// store function
public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=>'required|max:225',
            'photo'=>'required|image',
          ));
          $slider = new Slider;
          $nsfasimg = request('nsfasimg',1);
          if ($nsfasimg==0){
            $slider->title = $request->input('title');
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $filename = 'NSFAS-design-Homepage.'. $photo->getClientOriginalExtension();
                $location = public_path('images/nsfas/');
                $request->file('photo')->move($location, $filename);

                $slider->photo = $filename;
            }
          }
          else{
            $slider->title = $request->input('title');
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $filename = 'slide' . '-' . time() . '.' . $photo->getClientOriginalExtension();
                $location = public_path('images/');
                $request->file('photo')->move($location, $filename);

                $slider->photo = $filename;
            }
            $slider->save();
         }
          
          return redirect()->route('slides.index');
    }

// we will get back to the rest of functions later
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
        $slider = Slider::findOrFail($id);
        return view('sliders.edit', compact('slider'));
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
      $slider = Slider::find($id);
       $this->validate($request, array(
         'title'=>'required|max:225',
         'photo'=>'required|image'
      ));

       $slider = Slider::where('id',$id)->first();

       $slider->title = $request->input('title');

       if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $filename = 'slide' . '-' . time() . '.' . $photo->getClientOriginalExtension();
        $location = public_path('images/');
        $request->file('photo')->move($location, $filename);

        $oldFilename = $slider->photo;
        $slider->photo= $filename;
        if(!empty($slider->photo)){
          Storage::delete($oldFilename);
        }
      }

      $slider->save();

      return redirect()->route('slides.index',
          $slider->id)->with('success',
          'Slider, '. $slider->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $imageName=$slider->photo;
        $file_path = "images/$imageName"; 
        unlink(public_path($file_path));

        Storage::delete($slider->photo);
        $slider->delete();

        return redirect()->route('slides.index')
                ->with('success',
                'Slide successfully deleted');
    }
}
