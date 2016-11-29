<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'branchs';

    protected $primaryKey = 'id_branch';

    protected $fillable = [
        'branch', 'created_at', 'updated_at',
    ];
}
