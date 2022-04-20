<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_user')->insertOrIgnore([
            'user_id' => '1',
            'article_id' => '1'
        ]);
        DB::table('article_user')->insertOrIgnore([
            'user_id' => '1',
            'article_id' => '1'
        ]);

        DB::table('article_user')->insertOrIgnore([
            'user_id' => '1',
            'article_id' => '2'
        ]);

        DB::table('article_user')->insertOrIgnore([
            'user_id' => '2',
            'article_id' => '2'
        ]);
        DB::table('article_user')->insertOrIgnore([
            'user_id' => '2',
            'article_id' => '3'
        ]);
        DB::table('article_user')->insertOrIgnore([
            'user_id' => '2',
            'article_id' => '1'
        ]);

    }
}
