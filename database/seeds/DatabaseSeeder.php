<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(IntersectorsTableSeeder::class);
        $this->call(AnalysesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(InteranswersTableSeeder::class);
        $this->call(InterclassesTableSeeder::class);
    }
}
