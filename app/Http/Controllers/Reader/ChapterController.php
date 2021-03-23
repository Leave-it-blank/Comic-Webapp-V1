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
class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function manga_chapter(comic $comic, $manga, $id, $number){

      
        if ($comics = Comic::find($id)) {


           

            $chapters = Chapter::where('comic_id', $id)->where('number', $number)->get();

            $chapter_view = DB::table('chapters')->where('comic_id', $id)->where('number', $number);

            $chapter_view->increment('view_count');

            
            OpenGraph::setDescription($comics->desc);
            OpenGraph::setTitle($comics->title);
            OpenGraph::addProperty('determiner', 'Manga'); 
            OpenGraph::addProperty('image' , $comics->settings_site_url(). $comics->cover);
            OpenGraph::addProperty('chapter_number' , $number);
            OpenGraph::addProperty('comic_id' , $id);
          // get previous user id
             $previous = $comic->chapter_previous($id, $number);

          // get next user id
             $next = $comic->chapter_next($id, $number);

            $comics->increment('view_count');

            return View::make('series.chapter.comic_page')->with([

                'comics' => $comics,

                'id' => $id,

                'chapters' => $chapters,

                'manga' => $manga,

                'comics' => $comics,

                'previous' =>  $previous,

                'next' => $next,



            ]);

        } else {

            return redirect()->route('reader.comics.index');

        }
    }
}
