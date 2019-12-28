<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function companies() {
        return $this->hasMany(Company::class);
    }
}
