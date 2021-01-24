<?php

use Illuminate\Database\Seeder;
use App\settings;
class settings_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $settings = new settings;
		$settings->id = '1';

		$settings->save();

    }
}
