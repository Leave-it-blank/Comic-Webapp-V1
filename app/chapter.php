<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use DB;
use App\url;
use App\comic;
class chapter extends Model
{
	use Sluggable;

	protected $primaryKey = 'comic_id';
	use Filterable;

    /**
     * @var array
     */
	
	protected $appends = ['page','release_date', 'chapter_url'];
	

	protected $table = 'chapters';


	protected $fillable = [
        'name','volume','ongoing', 'cover', 'comic_id', 'number', 'url'
    ];




	protected $casts = [
		'release_at' => 'date',
	
		'placeditems' => 'cover',
	];
	public function sluggable()
	{
		
		return [
			'chapterslug' => [
				'source' => 'name'
			]

			
		];
		
	}

	public function comic()
	{

		
		return $this->belongsTo( \App\comic::class , 'comic_id');
	}

	public function deletechapter()
	{


		$chapters = ChapterDB::select('select * from chapters where id = ?', $id);

		
	}










/*





	public function comic()
	{
		return $this->belongsTo(comic::class);
	}


	
	public static function boot()
	{
		parent::boot();
		static::deleting(function ($model) {
			$pages = $model->pages;

			foreach ($pages as $page) {
				$page->delete();
			}
		});
	}

	public function comic()
	{
		return $this->belongsTo(comic::class);
	}

	public function pages()
	{
		return $this->hasMany(Page::class);
	}

	public function getPageAttribute()
	{
		return $this->pages()->count();
	}

	public function getReleaseDateAttribute()
	{
		if (is_null($this->release_at)) {
			return $this->created_at->diffForHumans();
		}

		return $this->release_at->diffForHumans();
	}

	public function getChapterUrlAttribute()
	{
		return route('comic.read', ['comic_slug' => $this->comic()->first()->slug, 'chapter_num' => $this->chapter_num]);
	}

	public function scopeWithPages($query)
	{
		return $query->with(['pages' => function ($subquery) {
			$subquery->orderBy('page_num', 'ASC');
		}]);
	}
	*/
}
