<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\url;
use Cviebrock\EloquentSluggable\Sluggable;
class comic extends Model
{
	use Sluggable;

    protected $appends = [
		'total_page',
		'status',
		'rating',
		'rating_by',
		'thumb_url',
		'manga_url',
		'latest_chapters',
		
	];
	protected $fillable = [
        'title','country','desc', 'author', 'artist', 'cover', 'url','slug',
    ];
	protected $casts = [
		'meta' => 'array',
	];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		
		return [
			'slug' => [
				'source' => 'title'
			]

			
		];
		
	}

	public function chapters()
	{
		return $this->hasMany(Chapter::class, 'comic_id');
	}





	/*
   
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function chapters()
	{
		return $this->hasMany(Chapter::class);
	}

	public function ratings()
	{
		return $this->hasMany(Rating::class);
	}

	

	public function activities()
	{
		return $this->morphMany(Activity::class, 'activity_model');
	}

	public function comments()
	{
		return $this->morphToMany(Comment::class, 'commentable', 'commentable');
	}

	public function bookmarks()
	{
		return $this->hasMany(Bookmark::class);
	}

	public function getLatestChaptersAttribute()
	{
		return $this->chapters->take(3);
	}

	public function getCategoryNameAttribute()
	{
		$category = $this->category;

		return $category->category;
	}

	public function getUploaderAttribute()
	{
		$user = $this->user;

		return $user->username;
	}

	public function getMangaUrlAttribute()
	{
		return route('manga.detail', ['manga_slug' => $this->slug]);
	}

	public function getThumbUrlAttribute()
	{
		return url('images/medium/' . $this->cover);
	}

	public function getRatingAttribute()
	{
		$ratings = $this->ratings()->get();
		$avg = $ratings->avg('rating');

		if (is_null($avg)) $avg = 0;

		return $avg;
	}

	public function getRatingByAttribute()
	{
		return $this->ratings()->get()->count();
	}

	public function getStatusAttribute()
	{
		if ($this->is_completed) {
			return '<span class=\'label label-success\'>Completed</span>';
		} else {
			return '<span class=\'label label-warning\'>On Going</span>';
		}
	}


	public function scopeWithCategory($query)
	{
		return $query->with(['category', 'user', 'chapters' => function ($subquery) {
			return $subquery->orderBy('chapter_num', 'desc');
		}]);
	}

	public function scopeMostView($query)
	{
		return $this->scopeWithCategory($query)->orderBy('views', 'desc');
	}

	public function scopePopular($query)
	{
		return $this->scopeWithCategory($query);
	}

	public function scopeRecent($query)
	{
		return $this->scopeWithCategory($query)->latest();
	}

	public function scopeRandom($query)
	{
		return $this->scopeWithCategory($query)->orderBy(DB::raw('RAND()'));
	}

	public function bookmarkStatus($user)
	{
		$bookmark = $this->bookmarks()->where('user_id', $user->id)->first();

		if ($bookmark) {
			return $bookmark->status;
		}

		return -1;
	} */
}
