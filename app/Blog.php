<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'blogs';

    protected $primaryKey = 'id_blog';

    protected $fillable = [
        'id_blog', 'title', 'description', 'image', 'creator', 'created_at', 'updated_at',
    ];
}
