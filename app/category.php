<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    
	public function getTotalMangaAttribute()
	{
		return $this->mangas->count();
	}

	public function mangas()
	{
		return $this->hasMany(Manga::class);
	}
}
