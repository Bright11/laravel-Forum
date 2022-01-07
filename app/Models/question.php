<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function answers()
    {
        return $this->hasMany(answers::class,"id",'id');
    }

    public function category()
    {
        return $this->belongsTo(category::class,'cart_id','id');
    }
    //new
   /*
     public function details()
    {
        return $this->hasManyThrough(
            reply::class,
            answers::class,
            'question_id',
            'answer_id',
            'id',
            'id'
        );
    }
    public function detail()
    {
        return $this->hasOneThrough(
            reply::class,
            answers::class,
            'question_id',
            'answer_id',
            'id',
            'id'
        );
    }
   */
}
