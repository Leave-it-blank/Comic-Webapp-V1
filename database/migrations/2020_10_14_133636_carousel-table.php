<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
			$table->bigIncrements('id')->unique();
			$table->string('title', 200);
			$table->string('status')->default(false);
            $table->string('cover',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('classic',255)->nullable();
			$table->timestamps();
        });
        Schema::create('features', function (Blueprint $table) {
			$table->bigIncrements('id')->unique();
            $table->string('name', 200)->nullable();
            $table->string('sidebar')->nullable();
            $table->string('search', 255)->nullable();
            $table->boolean('search_status')->default(false);
			$table->boolean('side_bar_status')->default(false);
            $table->string('url',255)->nullable();
            $table->string('meta',255)->nullable();
            $table->string('class',255)->default('hidden');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousels');
        Schema::dropIfExists('features');
    }
}
