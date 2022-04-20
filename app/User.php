<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

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
     * @var object
     */
    public static function createUser(Reaqest $request)
    {

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
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

}
