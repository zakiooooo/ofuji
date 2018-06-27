<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafemenu extends Model
{
    protected $fillable = ['cafe_menu', 'content', 'allow_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
