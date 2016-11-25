<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'shops';

    protected $primaryKey = 'id_shop';

    protected $fillable = [
        'id_shop', 'id_user', 'name', 'description', 'image', 'created_at', 'updated_at',
    ];
}
