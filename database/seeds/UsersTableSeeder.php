<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => 'admin',
        		'profilpsy' => '0',
        		'role' => 'admin',
        	];

        User::insert($data);
    }
}
