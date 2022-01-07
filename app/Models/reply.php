<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    use HasFactory;
    public function answers()
    {
        return $this->belongsTo(answers::class);
    }
    public function answer()
    {
        return $this->belongsTo(answers::class);
    }
}
