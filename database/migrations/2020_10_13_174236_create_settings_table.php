<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id() ->unique();
            $table->timestamps();
            $table->string('disq', 255) ->default('cmsdisq');
            $table->string('site_name', 255) ->default('cms');
            $table->string('site_url', 255) ->nullable();
            $table->string('analytics', 255) ->default('cms_analytics');
            $table->string('adsense', 255) ->default('adsense');
            $table->string('theme_name', 255) ->default('dark');
       
            $table->text('discord_tag')->nullable();
            $table->text('patreon_tag')->nullable();
            $table->text('paypal_tag')->nullable();
            $table->text('meta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
        
    }
}
