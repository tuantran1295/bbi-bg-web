<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;

    public function companies() {
        $this->hasMany(Company::class);
    }
}
