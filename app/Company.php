<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function category() {
        $this->belongsTo(Category::class);
    }

    public function province() {
        $this->belongsTo(Province::class);
    }

    public function images() {
        $this->hasMany(Image::class);
    }
}
