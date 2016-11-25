<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'messages';

    protected $primaryKey = 'id_message';

    protected $fillable = [
        'name', 'email', 'subject', 'message', 'created_at', 'updated_at',
    ];
}
