<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $settings =  DB::table('settings')->where('id', '1')->first();
        $features =  DB::table('features')->where('id', '1')->first();
        return view('Admin.dashboard')->with([         
            
            'settings' => $settings,
            'features' => $features   ]);
    }
}
