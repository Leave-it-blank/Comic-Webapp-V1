<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new User;
		$user->name = 'secret';
		$user->username = 'admin';
		$user->email = 'admin@admin.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Admin');

		$user = new User;
		$user->name = 'secretuser';
		$user->username = 'user';
		$user->email = 'user@user.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('ContentManager');


		$user = new User;
		$user->name = 'readersecret';
		$user->username = 'reader';
		$user->email = 'reader@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret1';
		$user->username = 'reader1';
		$user->email = 'reader1@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret2';
		$user->username = 'reader2';
		$user->email = 'reader2@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret3';
		$user->username = 'reader3';
		$user->email = 'reader3@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret4';
		$user->username = 'reader4';
		$user->email = 'reader4@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');


		$user = new User;
		$user->name = 'readersecret5';
		$user->username = 'reader5';
		$user->email = 'reader5@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');


		$user = new User;
		$user->name = 'readersecret6';
		$user->username = 'reader6';
		$user->email = 'reader6@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret7';
		$user->username = 'reader7';
		$user->email = 'reader7@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret8';
		$user->username = 'reader8';
		$user->email = 'reader8@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');

		$user = new User;
		$user->name = 'readersecret9';
		$user->username = 'reader9';
		$user->email = 'reader9@reader.com';
		$user->password = bcrypt('12345678');
		$user->save();
		$user->assignRole('Reader');
	}
}
