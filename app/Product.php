<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';

    protected $primaryKey = 'id_product';

    protected $fillable = [
        'id_product', 'id_shop', 'id_category', 'title', 'description', 'price', 'keywords', 'created_at', 'updated_at',
    ];
}
