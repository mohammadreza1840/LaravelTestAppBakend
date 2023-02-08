<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['title','descriptions'];
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function indicaotors(){
        return $this->hasMany(Indicator::class);
    }
}
