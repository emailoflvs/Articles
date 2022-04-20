<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'nickname', 'firstname', 'surname', 'avatar', 'phone', 'sex', 'showPhone', 'experience'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Articles witch user took
     *
     * @var array
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    /**
     * Create new user
     *
     *
     * @param Request $request
     * @return mixed
     */
    public static function createUser(Request $request)
    {
        $email = md5(uniqid(rand(), true));
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $request->firstname,
                'password' => '',
                'firstname' => $request->firstname,
                'surname' => $request->surname,
                'nickname' => $request->nickname,
                'avatar' => $request->avatar,
                'phone' => $request->phone,
                'sex' => $request->sex,
                'showPhone' => $request->showPhone
            ]);

        return $user;
    }


    /**
     * Get User name by id
     *
     * @var string
     */
    public static function getUserNameById(int $user_id)
    {

        $user = User::find($user_id);
        return is_object($user) ? $user->name : "";

    }

    /**
     * Receive scheme where user show all his articles
     *
     * @var array
     */
    public static function getLibraryUserToArticles()
    {

        $userToArticles = [];
        foreach (User::all() as $user) {

            $lib['id'] = $user['id'];
            $lib['username'] = User::getUserNameById($user['id']);

            $stories = [];
            $reader = User::find($user['id']);
            foreach ($reader->articles as $article) {
                $stories[] = $article['text'];
            }
            $lib['text'][] = $stories;

            $userToArticles[] = $lib;
        }
        return $userToArticles;
    }


}
