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
    public function index()
    {
        
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
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic, $id, $slug)
    {

        $settings = DB::table('settings')->where('id', '1')->first();
     

        if ($comics = Comic::find($id)) {
            $comics->increment('view_count');
            OpenGraph::setDescription($comics->desc);
            OpenGraph::setTitle($comics->title);
            OpenGraph::addProperty('determiner', 'Manga'); 
            OpenGraph::addProperty('image' , $comic->settings_site_url() . $comics->cover);

            $chapters = Chapter::where('comic_id', $id)->get();

            return View::make('series.comic_info')->with([

                'comics' => $comics,

                'id' => $id,
                'si' => $slug,

                'chapters' => $chapters,

                'comics' => $comics,
            

            ]);

        } else {

            return redirect()->route('reader.comics.index');

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        //
    }
}
