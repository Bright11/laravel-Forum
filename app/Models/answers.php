<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(question::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class,"user_id",'id');
    }
    public function reply()
    {
        return $this->belongsTo(reply::class,"answer_id",'id');
    }
    /*
     public function reply()
    {
        return $this->hasMany(reply::class,"answer_id",'id');
    }
    public function replies()
    {
        return $this->morphMany(reply::class,'answer_id');
    }
    */
}
