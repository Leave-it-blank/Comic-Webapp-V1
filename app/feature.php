<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class feature extends Model
{
    //
    
    
    protected $fillable = [
        'id'	,'site_name',	'site_url',	'analytics'	,'adsense'	,'theme_name',	'discord_tag',	'patreon_tag',	'paypal_tag',	'meta'

    ];


public function carousel()
{
    DB::table('features');


}








}
