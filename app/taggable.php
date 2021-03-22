<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taggable extends Model
{
    //
}
$chapter_number = DB::table('chapters')->where('comic_id', $comic->id)->latest()->first()['name'];