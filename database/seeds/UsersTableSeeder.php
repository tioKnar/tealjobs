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
            [
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => '$2y$10$Bcig7/YblRSjO5VacS.eAesMGMcrKMamRSiDMZ6cWP0VA1Q7e3Y3m',
        		'role' => 'admin',
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => '$2y$10$3ILFr0a1fQubk9Jhx3Ke7uvj1RJp02BPcOtpKgdLlo3fcqpfKNVBW',
                'role' => 'user',
            ]
        ];

        User::insert($data);
    }
}
