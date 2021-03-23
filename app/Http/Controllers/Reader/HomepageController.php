<?php

namespace App\Http\Controllers\Reader;

use App\carousel;
use App\chapter;
use App\comic;
use App\Http\Controllers\Controller;
use App\page_view;
use DB;
use Illuminate\Http\Request;
use View;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
   
        $comics = Comic::with('chapters')->orderBy('id', 'desc')->limit(6)->get();
        $chapters = Chapter::with('comic')->orderBy('id', 'desc')->limit(18)->paginate(6);


       
        return View::make('Home')
            ->with('comics', $comics)
            ->with( 'chapters', $chapters);

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mostviewed
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


    public function search (Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $comics = Comic::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('author', 'LIKE', "%{$search}%")
            ->orWhere('artist', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
         
        
   

            return view('series.search', compact('comics'));
        
    }

    public function mostviewed(){

        $comics = Comic::with('chapters')->orderBy('view_count', 'desc')->limit(6)->get();


        $chapters = Chapter::with('comic')->orderBy('id', 'desc')->limit(18)->paginate(6);
        return View::make('Home')
          ->with('comics', $comics)
          ->with( 'chapters', $chapters);
         


    }

    public function mostpopular(){


        $comics = Comic::with('chapters')->orderBy('id', 'desc')->limit(6)->get();
        $chapters = Chapter::with('comic')->orderBy('id', 'desc')->limit(18)->paginate(6);


       
        return View::make('Home')
            ->with('comics', $comics)  
            ->with( 'chapters', $chapters) ;


    }

    public function mostrandom(){


        $noofch = Comic::count();
        $chapters = Chapter::with('comic')->orderBy('id', 'desc')->limit(18)->paginate(6);
       
     if($noofch >6){
        $comics = Comic::awith('chapters')->inRandomOrder()->limit(6)->get();
     
     }
     else {
        $comics = Comic::with('chapters')->inRandomOrder()->limit(1)->get();
       
     }
   

       
        return View::make('Home')
            ->with('comics', $comics)    
            ->with( 'chapters', $chapters);     
           
            
         


    }
}
