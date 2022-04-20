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

}
