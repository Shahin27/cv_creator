<?php

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Skill::insert([


            ["id" => "1",
            "user_id" => "1",
            "name" => "OOP",
            "rank" => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "2",
            "user_id" => "1",
            "name" => "Laravel",
            "rank" => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "3",
            "user_id" => "1",
            "name" => "Front End",
            "rank" => "9",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "4",
            "user_id" => "1",
            "name" => "PHP",
            "rank" => "7",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "5",
            "user_id" => "1",
            "name" => "Basic Programming",
            "rank" => "9",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "6",
            "user_id" => "1",
            "name" => "Problem Solving",
            "rank" => "9",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "7",
            "user_id" => "1",
            "name" => "Javascript",
            "rank" => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "8",
            "user_id" => "1",
            "name" => "Jquery",
            "rank" => "7",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "9",
            "user_id" => "1",
            "name" => "Ajax",
            "rank" => "5",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "10",
            "user_id" => "1",
            "name" => "Wordpress",
            "rank" => "8",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" => "11",
            "user_id" => "1",
            "name" => "Squarespace",
            "rank" => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
            
        ]);

    }
}


