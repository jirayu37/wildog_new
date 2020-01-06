<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
        protected $fillable = ['user_id', 'i_phone', 'workplace', 'address', 'salary', 'image'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
