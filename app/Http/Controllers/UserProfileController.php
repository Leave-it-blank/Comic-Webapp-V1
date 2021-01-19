<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class UserProfileController extends Controller
{
    //

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
        $Users = User::all();
        
        $roles = Role::all();
        return view('Admin.Reader.profile')->with([
      
        'users'=> $Users,
        'roles' => $roles,
        'settings' => $settings,
        'features' => $features  
        ]);
    }
}
