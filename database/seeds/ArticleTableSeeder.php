<?php
use App\Article;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 Article::truncate();//清空Article資料表資料再重新產生資料
    	 $faker=Factory::create('zh_TW');
    	foreach (range(10,1) as $number) {//range(10,1)搭配Carbon::now()->subDays,把文章時間遞減
    	
    		 Article::create([
        	'title'=>$faker->title,//只有title支援中文
        	'content'=>$faker->paragraph,
        	'created_at'=>Carbon::now()->subDays($number),
        	'updated_at'=>Carbon::now()->subDays($number),
        ]);
    	}
       
    }
}

