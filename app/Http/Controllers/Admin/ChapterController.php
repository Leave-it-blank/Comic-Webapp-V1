<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\chapter;
use Illuminate\Http\Request;
use App\comic;
use DB;
use View;
use App\url;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *    $chapters = Chapter::with('comic')->get();
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:create series|edit series|delete series']);
    }

    public function index($id)
    {
        $comics = Comic::find($id );

       
        $chapters =  Chapter::where( 'comic_id', $id)->get();
        
        return view('Admin.comic.chapter.index')->with([
 
            'comics' => $comics,
          
           'id' => $id,
        
           'chapters' => $chapters,

            
           
            
        ]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(comic $comics, $id)
    {
        $comics = Comic::find($id);
        return view('Admin.comic.chapter.create')->with([
 
            'comics' => $comics,
          
           'id' => $comics->id,
        
           'slug' => $comics->slug,

            
           
            
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, chapter $chapters, comic $comics, $id )
    {


        
        
        $comics = Comic::find($comics->id);

  
       
        
        
        
        if($request->hasFile('image'))
        {
         $names = [];
             foreach($request->file('image') as $image)
        {
              $destinationPath = 'storage/comics/'. $id. '/'. $request->get('volume'). '/' .$request->get('number');
              $filename = $image->getClientOriginalName();
              $image->move($destinationPath, $filename);
              array_push($names, $filename);          

         }
          


        $chapter = new Chapter([
            'name' => $request->get('name'),           
            'number' => $request->get('number'),
            'volume' => $request->get('volume'),
            'comic_id' => $id,
            'cover' => json_encode($names),
            'url' => $destinationPath. '/',
              
           
        ]); 
        
   
        }


         if( $chapter->save())
           {
             $request->session()->flash('success', $chapter->number.'  has been created.');
             return redirect()->back();
           }
         else
           {
              $request->session()->flash('erorr', 'Chapter has been not created due to technical error.');
              return redirect()->back();
            }
       
}

    /**
     * Display the specified resource.
     *
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy( comic $comics, $id)
    {
        

      
           
        $chapter = DB::table('chapters')->where('id', $id);
      


        if($chapter->delete())
        {
         
          return redirect()->back()->with('success', 'Chapter has been deleted.');
        }
      else
        {
          
           return redirect()->back()->with('erorr', 'Chapter has been not deleted due to technical error.');
         }
      
    }

 
}