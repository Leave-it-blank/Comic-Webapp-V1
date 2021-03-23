<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		

		Schema::create('comics', function(Blueprint $table){
			$table->bigIncrements('id')->unique();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('title', 200)->nullable();
			$table->string('cover', 255) ->nullable();
			$table->integer('item_type')->unsigned()->default(0); //0 for comics and 1 for novels?
			$table->text('meta')->nullable();
			$table->text('slug')->nullable();
			$table->text('desc')->nullable();
			$table->text('author')->nullable();
			$table->text('artist')->nullable();
			$table->text('country')->nullable();
			$table->integer('view_count')->default(0);
			$table->string('url', 255)->nullable();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('CASCADE');
		});



		Schema::create('chapters', function (Blueprint $table) {
			$table->id()->unique();
			$table->string('name', 40)->nullable();
			$table->string('volume', 40)->nullable();
			$table->integer('number')->unsigned();
			$table->text('chapterslug')->nullable();
		    $table->boolean('ongoing') ->default(true);
			$table->string('cover')->nullable();
			$table->bigInteger('comic_id')->unsigned();
			$table->integer('view_count')->default(0);
			$table->timestamps();
			$table->string('url', 255)->nullable();
			$table->foreign('comic_id')->references('id')->on('comics')->onDelete('CASCADE')->onUpdate('CASCADE');
		});

		Schema::create('ratings', function (Blueprint $table){
			$table->bigIncrements('id');
			$table->bigInteger('comic_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->tinyInteger('rating')->unsigned();
			$table->string('url', 255)->nullable();
			$table->timestamps();

			$table->foreign('comic_id')->references('id')->on('comics')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
		});

	

		Schema::create('recommended', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('comic_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();

			$table->foreign('comic_id')->references('id')->on('comics')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recommended', function (Blueprint $table) {
			$table->dropForeign('recommended_comic_id_foreign');
			$table->dropForeign('recommended_user_id_foreign');
		});

		
		Schema::table('ratings', function (Blueprint $table) {
			$table->dropForeign('ratings_user_id_foreign');
			$table->dropForeign('ratings_comic_id_foreign');
		});

		Schema::table('category_comic', function (Blueprint $table) {
			$table->dropForeign('category_comic_comic_id_foreign');
			$table->dropForeign('category_comic_category_id_foreign');
		});

		Schema::table('chapters', function (Blueprint $table) {
			$table->dropForeign('chapter_comic_id_foreign');
		});
	
		Schema::table('comics', function (Blueprint $table) {
			$table->dropForeign('comics_user_id_foreign');
		});
		Schema::dropIfExists('recommended');
	
		Schema::dropIfExists('ratings');
		Schema::dropIfExists('category_comic');
		Schema::dropIfExists('comics');
		Schema::dropIfExists('categories');
	}
}