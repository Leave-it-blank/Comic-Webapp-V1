<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $fillable = [
        'disq'	,'site_name',	'site_url',	'analytics'	,'adsense'	,'theme_name',	'discord_tag',	'patreon_tag',	'paypal_tag',	'meta'

    ];
}
