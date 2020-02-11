<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable=[
        'title',
        'contents',
        'slug',
        'channel_id'
    ];
}
