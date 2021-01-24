<?php

use Illuminate\Database\Seeder;
use App\feature;
class features_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = new feature;
		$features->id = '1';

		$features->save();
    }
}
