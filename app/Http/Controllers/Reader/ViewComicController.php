<?php

namespace App\Http\Controllers\Reader;

use App\chapter;
use App\comic;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\OpenGraph;

class ViewComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function manga_show(comic $comic, $manga , $id){


        if ($chapters = Chapter::with('comic')->where('comic_id', $id)->orderby('number')->get()) {
           
           
            foreach($chapters ->take(1) as $chapter)
            {
              
            $chapter->comic()->increment('view_count');
            OpenGraph::setDescription($chapter->comic->desc);
            OpenGraph::setTitle($chapter->comic->title);
            OpenGraph::addProperty('determiner', 'Manga'); 
            OpenGraph::addProperty('image' , $comic->settings_site_url() . $chapter->comic->cover);
            $comic_details = $chapter->comic;
            
            }
        


            return View::make('series.comic_info')->with([

                'comics' => $comic_details,

                'id' => $id,

                'manga' => $manga,

                'chapters' => $chapters,

               
            

            ]);

        } else {

            return redirect()->route('reader.comics.index');

        }

    }
}
