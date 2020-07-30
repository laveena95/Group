<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title',
        'link',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
