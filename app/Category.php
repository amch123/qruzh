<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'categories';

    protected $primaryKey = 'id_categories';

    protected $fillable = [
        'name_category', 'created_at', 'updated_at',
    ];
}
