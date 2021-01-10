<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\page_view;
use Illuminate\Http\Request;
use DB;
use View;
use App\comic;
use App\carousel;
use App\chapter;



class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = carousel::all();
        $comics = Comic::all();
        $chapters = Chapter::orderBy('id', 'desc')->limit(8)->get();
        
        
        return view('Home')->with([
 
            'comics' => $comics,
            
            'carousels' => $carousels,
            
            'chapters' => $chapters,

         
           
            
        ]); 
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
     * @param  \App\page_view  $page_view
     * @return \Illuminate\Http\Response
     */
    public function show(page_view $page_view, comic $comics, $id)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\page_view  $page_view
     * @return \Illuminate\Http\Response
     */
    public function edit(page_view $page_view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\page_view  $page_view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page_view $page_view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\page_view  $page_view
     * @return \Illuminate\Http\Response
     */
    public function destroy(page_view $page_view)
    {
        //
    }
}
