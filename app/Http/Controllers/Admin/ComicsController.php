<?php

Namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\comic;
use Illuminate\Http\Request;
use DB;
use View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use File;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:create series|edit series|delete series']);
    }

    public function index()
    {
        $comics = Comic::all();

        return view('Admin.comic.index')->with('comics', $comics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, comic $comics)

    {
        $request->validate([
            'title'=>'required',
            'country'=>'required',
            
            
        ]);
        $validated = $request->validate([
            'title' => 'string|max:200',
            'image' => 'mimes:jpeg,png|max:1024',
           
            
        ]);
       

        
        
        if($request->file('image')->isValid())
     {

        $extension = $request->image->extension();
        
        
       
        $request->image->storeAs('/public/image', $validated['title']. ".".$extension);
        
        $definedpath = ('image/');

        $url = Storage::url( $definedpath. $validated['title'].".".$extension);

        
       

        $comic = new Comic([
            'title' => $request->get('title'),
            
            'desc' => $request->get('desc'),
            'author' => $request->get('author'),
            'artist' => $request->get('artist'),
            'country' => $request->get('country'),
            'cover' => $url,
            
           
    
           
            
              
           
        ]);
     

  

        $comic->save();
        return redirect()->route('admin.comics.index')->with('success', 'manga saved!');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show( comic $comics, $id)
    {
        
     if( $comics = Comic::find($id))
     {
       
        return View::make('Admin.comic.show')->with([
 
            'comics' => $comics,
            'id' => $id,
        
            
           
            
        ]); }

        else
        {

            return  view('Home');

        }
       
    
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $comics = comic::find($id);
        return view('Admin.comic.edit')->with([
 
            'comics' => $comics,
            'id' => $id,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $request->validate([
            'title'=>'required',
            'country'=>'required',
        ]);
        $validated = $request->validate([
            'title' => 'string|max:200',
            'image' => 'mimes:jpeg,png|max:1024',
        ]);


        $comic = Comic::find($id);
        $comic->title =  $request->get('title');
        $comic->desc = $request->get('desc');
        $comic->author = $request->get('author');
        $comic->artist = $request->get('artist');
        
        $comic->country = $request->get('country');
        

        if($request->file('image')->isValid())
        {
   
           $extension = $request->image->extension();
           
           
          
           $request->image->storeAs('/public/image', $validated['title']. ".".$extension);
           
           $definedpath = ('image/');
   
           $url = Storage::url( $definedpath. $validated['title'].".".$extension);

           $comic->cover = $url;
           
        }
       if( $comic->save())
        {
            $request->session()->flash('success', $comic->title .'has been updated.');
            return redirect()->route('admin.comics.index')->with('success', $comic->title .' has been updated!');
        }
        else
        {
            $request->session()->flash('erorr', $comic->title .'has been not updated due to technical error.');
            return redirect()->route('admin.comics.index')->with('error', 'There was an error during update!');
        }
       
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

       

  
      if(\File::exists(public_path($comic->cover))){

          \File::delete(public_path($comic->cover));

          $comic->delete();

           }else{

             dd('File does not exists.');

              }
        
      

        return redirect()->route('admin.comics.index')->with('success', $comic->title .' has been deleted!');
    }
    
}
