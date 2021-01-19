<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\carousel;
use Illuminate\Http\Request;
use DB;
use View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class CarouselController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $carousels = carousel::all();

        return view('Admin.carousel.index')->with('carousels', $carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.carousel.create');
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
            'title'=>'required',
            'position'=>'required',
            
            
            
            
        ]);
        $validated = $request->validate([
            'title' => 'string|max:200',
            'image' => 'mimes:jpeg,png|max:1024',
        ]);

        if($request->file('image')->isValid())
     {

        $extension = $request->image->extension();
        
        
       
        $request->image->storeAs('/public/carousel', $validated['title']. ".".$extension);
        
        $definedpath = ('carousel/');

        $url = Storage::url( $definedpath. $validated['title'].".".$extension);

        $carousel = new Carousel([
            'title' => $request->get('title'),
            'position' => $request->get('position'),
            'status' => $request->get('status'),
            'classic' => $request->get('classic'),
            
            
            'cover' => $url,
            
              
           
        ]);
     

  
        $carousel->save();
        
        return redirect()->route('admin.carousel.index')->with('success', $carousel->title. ' saved!',);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(carousel $carousels, $id)
    {
        if( $carousels = carousel::find($id))
        {
          
           return View::make('Admin.carousel.show')->with([
    
               'carousels' => $carousels,
               'id' => $id,
               
               
              
               
           ]); }
   
          
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(carousel $carousels, $id)
    {
        $carousels = carousel::find($id);
        return view('Admin.carousel.edit')->with([
 
            'carousels' => $carousels,
            'id' => $id,
        
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carousel $carousels, $id)
    {
        $request->validate([
            'title'=>'required',
            
        ]);
        $validated = $request->validate([
            'title' => 'string|max:200',
            'image' => 'mimes:jpeg,png|max:1024',
        ]);


        $carousels = carousel::find($id);
        $carousels->title =  $request->get('title');
        $carousels->position = $request->get('position');
        $carousels->classic = $request->get('classic');

        if($request->file('image')->isValid())
        {
        $extension = $request->image->extension();
        
        
       
        $request->image->storeAs('/public/carousel', $validated['title']. ".".$extension);
        
        $definedpath = ('carousel/');

        $url = Storage::url( $definedpath. $validated['title'].".".$extension);

         $carousels->cover = $url;
        }


       if( $carousels->save())
        {
            $request->session()->flash('success', $carousels->title .'has been updated.');
            return redirect()->route('admin.carousel.index')->with('success', $carousels->title .' has been updated!');
        }
        else
        {
            $request->session()->flash('erorr', $carousels->title .'has been not updated due to technical error.');
            return redirect()->route('admin.carousel.index')->with('error', 'There was an error during update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(carousel $carousels, $id)
    {
        $carousels = carousel::find($id);
        $carousels->delete();

        return redirect()->route('admin.carousel.index')->with('success', $carousels->title .' has been deleted!');
    }
}
