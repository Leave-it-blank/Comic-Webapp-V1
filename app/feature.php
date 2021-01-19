<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class feature extends Model
{
    //
    
    
    protected $fillable = [
        'id'	,'name'	,'sidebar',	'search'	,'search_status',	'side_bar_status'	,'url',	'meta'	,'class'


    ];


public function carousel()
{
    DB::table('features');


}








}
