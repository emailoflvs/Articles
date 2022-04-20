<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Article extends Model
{

    /**
     * Enable soft delete
     **/
    use SoftDeletes;

    /**
     * Attributes to be converted to a date for soft delete
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Articles witch user took
     *
     * @var array
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get Article name by id
     *
     * @var string
     */
    public static function getArticleNameById(int $article_id)
    {

        $article = Article::find($article_id);
        return is_object($article) ? $article->text : "";

    }


    /**
     * Receive scheme where article show all readers
     *
     * @var array
     */
    public static function getLibraryArticlesToUsers()
    {

        $articleToUsers = [];
        foreach (Article::all() as $article) {

            $lib['id'] = $article['id'];
            $lib['articles'] = Article::getArticleNameById($article['id']);

            $readers = [];
            $reader = Article::find($article['id']);
            foreach ($reader->users as $user) {
                $readers[] = $user['name'];
            }
            $lib['name'] = $readers;

            $articleToUsers[] = $lib;
        }

        return $articleToUsers;
    }



}
