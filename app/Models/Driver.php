<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model {

    protected $fillable = [
        'name', 'document',
    ];

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }

}