<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function category() {
       return $this->belongsTo(Category::class);
    }

    public function province() {
       return $this->belongsTo(Province::class);
    }

    public function images() {
       return $this->hasMany(Image::class);
    }
}
