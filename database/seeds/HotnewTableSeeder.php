<?php

use App\Post;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HotnewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 Hotnew::truncate();//清空資料表資料再重新產生資料
    	 $faker=Factory::create('zh_TW');
    	foreach (range(10,1) as $number) {//range(10,1)搭配Carbon::now()->subDays,把文章時間遞減
    	
    		 Hotnew::create([
        	'title'=>$faker->title,//只有title支援中文
        	'content'=>$faker->paragraph,
        	'is_feature'=>0,
        	'page_view'=>0,
        	'created_at'=>Carbon::now()->subDays($number),
        	'updated_at'=>Carbon::now()->subDays($number),
        ]);
    	}
       
    }
}
