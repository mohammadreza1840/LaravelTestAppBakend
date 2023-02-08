<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title','isActive','extradata_id'];

    public function tests(){
        return $this->hasMany(Test::class);
    }
}


