<?php
/**
 * Author: cai.q@foxmail.com
 * QQ:     370361272
 * Date:   2015/3/27
 * Time:   8:40
 */

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        for ($i=0; $i < 10; $i++) {
            Page::create([
                'title'   => 'Title '.$i,
                'slug'    => 'first-page',
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }

}