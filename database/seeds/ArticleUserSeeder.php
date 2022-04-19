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
        $ArticleUser = ArticleUser::firstOrCreate([
            'user_id' => '1',
            'article_id' => '1'
        ]);

        $ArticleUser = ArticleUser::firstOrCreate([
            'user_id' => '1',
            'article_id' => '2'
        ]);

        $ArticleUser = ArticleUser::firstOrCreate([
            'user_id' => '2',
            'article_id' => '2'
        ]);
        $ArticleUser = ArticleUser::firstOrCreate([
            'user_id' => '2',
            'article_id' => '3'
        ]);
        $ArticleUser = ArticleUser::firstOrCreate([
            'user_id' => '2',
            'article_id' => '1'
        ]);

    }
}
