<?php

use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Experience::insert([

            ["id" =>"1",
            "user_id" =>"1",
            "company_name" =>"Upwork Global Inc",
            "position" =>"Freelance Web Developer",
            "duration" =>"Aug 2013 to Present",
            "details" =>"I have successfully completed 80+ projects from 20+ international clients\r\nvia Upwork and still i am a top rated freelancer on Upwork",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" =>"2",
            "user_id" =>"1",
            "company_name" =>"Website Dev Co. LLC",
            "position" =>"Web Developer",
            "duration" =>"Feb 2016 - Present",
            "details" =>"I contractually work for this company on different web development projects. Most of the jobs are either a fixing job or a full website development job.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ["id" =>"3",
            "user_id" =>"1",
            "company_name" =>"Daffodil International Academy",
            "position" =>"Teacher Assistance",
            "duration" =>"Mar 2016 - Mar 2017",
            "details" =>"I was recruited on my own campus as Teacher Assistance of our course\r\ncoordinator Nazrana Haque.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]

            
        
        ]);

    }
}



