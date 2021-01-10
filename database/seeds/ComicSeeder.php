<?php

use Illuminate\Database\Seeder;
use App\comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $comics = new comic;
		$comics->title = 'test_data';
		$comics->desc = 'admin';
		$comics->save();
    }
}
