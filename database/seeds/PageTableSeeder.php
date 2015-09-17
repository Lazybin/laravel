<?php
/**
 * Created by PhpStorm.
 * User: hm01
 * Date: 15-9-17
 * Time: 下午2:24
 */
use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder{
    public function run()
    {
        DB::table('pages')->delete();

        for($i=0;$i<10;$i++)
        {
            Page::create(
                [
                    'title'=>'Title'.$i,
                    'slug'=>'first-page',
                    'body'=>'Body'.$i,
                    'user_id'=>1,
                ]
            );
        }

    }
} 