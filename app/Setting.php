<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'settings';

    protected $primaryKey = 'id_setting';

    protected $fillable = [
        'id_setting', 'mision', 'vision', 'created_at', 'updated_at',
    ];
}
