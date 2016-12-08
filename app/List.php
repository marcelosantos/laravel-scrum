<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
