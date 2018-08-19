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
        DB::table('socials')->delete();
        DB::table('skills')->delete();
        DB::table('education')->delete();
        DB::table('experiences')->delete();
        DB::table('cvs')->delete();
        DB::table('users')->delete();


        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CvsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
    }
}
