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
    public function edit($id, $number)
    {

          $comics = comic::find($id);
          $chapter = Chapter::where( 'comic_id', $id)->where( 'number', $number)->first();

          return view('Admin.comic.chapter.edit')->with([
 
            'comics' => $comics,
            'id' => $id,
            'cid' => $chapter->id,
            'number' => $chapter->number,
            'chapter' => $chapter
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $number)
    {

      $chapter_update_id = Chapter::where( 'comic_id', $id)->where( 'number', $number)->first();
       $request->validate([
        'name'=>'required',
        'number'=>'required',
        'volume'=>'required',
           ]);
          $cid = $chapter_update_id->id;

         if( $chapter_update = chapter::find($cid))
         {

          $chapter_update->name =  $request->get('name');
          $chapter_update->number = $request->get('number');
          $chapter_update->volume = $request->get('volume');

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

           $chapter_update->cover =  json_encode($names);
           $chapter_update->url =    $destinationPath. '/';

         }

        
      
        }

        if(  $chapter_update->save())
        {

          $comics = comic::find($id);
          $chapters =  Chapter::where( 'comic_id', $id)->get();
          $request->session()->flash('success', 'Chapter '.$cid.' has been updated.');
          return view('Admin.comic.chapter.index')->with([
 
            'comics' => $comics,
          
           'id' => $id,
        
           'chapters' => $chapters,

            
           
            
        ]);
      }
      else
      {
          $request->session()->flash('erorr', $cid .'has been not updated due to technical error.');
          return redirect()->back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * 
     *    
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