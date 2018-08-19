<?php

use App\Models\Cv;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Cv::insert([
			[
				'id' => '1',
				'user_id'  => '1',
				'name' => 'Md. Shahinur Alam',
				'position' => 'Software Developer',
                'about' => "I am an. well experienced (4+ years) top rated freelancer on upwork in\r\nweb design & development field. I have strong strength of basic\r\nprogramming which helps me to get toughest job from upwork where the\r\ncompetition is less. I love to do challenging jobs where others runs\r\nbehind. My ambition is to be a leading IT professional on global market.",
                'email' => 'mdshahinuralam001@gmail.com',
                'contact' => '+8801676770332',
                'address' => '135 Jurain,  dhaka, Bangladesh',
                'photo' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]
		]);

    }
}
