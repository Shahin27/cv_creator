<?php

use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Social::insert([

            
         ["id" => "1",
         "user_id" => "1",
         "name" => "linkedin",
         "link" => "Linkedin.com/in/md-shahinur-alam/",
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

         ["id" => "2",
         "user_id" => "1",
         "name" => "circle-o",
         "link" => "Upwork.com/freelancers/~01455464e82d5e7968",
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

         ["id" => "3",
         "user_id" => "1",
         "name" => "facebook",
         "link" => "Facebook.com/shahinur.alam27",
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

         ["id" => "4",
         "user_id" => "1",
         "name" => "github",
         "link" => "Github.com/Shahin27",
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]



            
        ]);

    }
}



