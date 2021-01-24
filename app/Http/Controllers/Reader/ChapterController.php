<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\chapter;
use Illuminate\Http\Request;

use App\comic;
use App\settings;
use App\carousel;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


class ChapterController extends Controller
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
     * @param  \App\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic, $id, $slug, $number)
    {
        $settings =  DB::table('settings')->where('id', '1')->first();

        if( $comics = Comic::find($id ))

      {
            $chapters =  Chapter::where( 'comic_id', $id)->where( 'number', $number)->get();

            $chapter_view = DB::table('chapters')->where( 'comic_id', $id)->where( 'number', $number);

            $chapter_view->increment('view_count');
           
            $comics->increment('view_count');
           
            
          
          
        
            return View::make('series.chapter.comic_page')->with([
   
                'comics' => $comics,
     
                'id' => $id,
    
                'si' => $slug,
          
                'chapters' => $chapters,

                'comics' => $comics,
   
                'settings' => $settings
 
             
            
             
       
             ]);

         }
       
    
            else
            
             {
 
           
                return redirect()->route('reader.comics.index');
  
          
    
            }
           
     




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
    public function destroy(chapter $chapter)
    {
        //
    }
}
