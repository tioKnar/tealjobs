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
        		'firstname' => 'Admin',
                'lastname' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => '$2y$10$Bcig7/YblRSjO5VacS.eAesMGMcrKMamRSiDMZ6cWP0VA1Q7e3Y3m',
        		'role' => 'admin',
                'profilpsy' => '26',
                'travaillomane' => 6,
                'empathique' => 6,
                'rebelle' => 6,
                'reveur' => 6,
                'perseverant' => 6, 
                'promoteur' => 6,
            ],
            [
                'firstname' => 'User',
                'lastname' => 'User',
                'email' => 'user@user.com',
                'password' => '$2y$10$3ILFr0a1fQubk9Jhx3Ke7uvj1RJp02BPcOtpKgdLlo3fcqpfKNVBW',
                'role' => 'user',
                'profilpsy' => '56',
                'travaillomane' => 1,
                'empathique' => 2,
                'rebelle' => 3,
                'reveur' => 4,
                'perseverant' => 5, 
                'promoteur' => 6,

            ]
        ];

        User::insert($data);
    }
}
