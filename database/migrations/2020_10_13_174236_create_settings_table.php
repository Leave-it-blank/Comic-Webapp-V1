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
            $table->string('site_name', 255) ->default('LynxScans');
            $table->string('site_url', 255) ->nullable();
            $table->string('analytics', 255) ->default('cms_analytics');
            $table->string('adsense', 255) ->default('adsense');
            $table->string('theme_name', 255) ->default('#fffff'); #body color
            $table->string('admin_theme_name', 255) ->default('#0f0f0f'); #body color
            $table->string('admin_siderbar_name', 255) ->default('#0f0f0f'); #sidebar  color
            $table->text('discord_tag')->nullable();
            $table->text('patreon_tag')->nullable();
            $table->text('paypal_tag')->nullable();
            $table->string('text_meta' , 255)->default('black'); #text color
            $table->string('admin_text_meta' , 255)->default('white'); #text color
            $table->string('site_text_meta' , 255)->default('darkyellow'); #text color of site and later  use
            $table->text('meta')->nullable();
            $table->string('admin_side_text_meta' , 255)->default('white'); #text sidebar admin color
         
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
