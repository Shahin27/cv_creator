<?php

use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Education::insert([

            ["id" => "1",
            "user_id" => "1",
            "institute" => "University of Greenwich,UK",
            "course" => "BIT",
            "type" => "BSc Hons",
            "duration" => "DECEMBER 2013 - JUNE 2018",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            "result" => "1st Class"],

            ["id" => "2",
            "user_id" => "1",
            "institute" => "Shyampur Model School & College",
            "course" => "HSC",
            "type" => "Intermediate Studies",
            "duration" => "MAY 2009 - JUNE 2011",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            "result" => "GPA =>  4.5 \/ 5.0"]

        ]);

    }
}



