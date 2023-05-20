<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    protected $fillable = [
        'plate', 'model',
    ];

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }

}