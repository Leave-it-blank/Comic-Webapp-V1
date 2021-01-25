<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username')->unique();
			$table->string('profile_pic')->nullable();
			$table->string('intro')->nullable();
			$table->string('country')->nullable();
			$table->timestamp('date_of_birth')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('active_reader')->default(true);
            $table->string('url', 255)->nullable();
            $table->string('theme_name', 255) ->default('#0f0f0f'); #body color
            $table->string('site_text_meta' , 255)->default('red'); #later use
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
