<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Article::firstOrCreate([
            'text' => 'Article1'
        ]);

        $article = Article::firstOrCreate([
            'text' => 'Article2'
        ]);

        $article = Article::firstOrCreate([
            'text' => 'Article3'
        ]);

        $article = Article::firstOrCreate([
            'text' => 'Article4'
        ]);

    }
}
