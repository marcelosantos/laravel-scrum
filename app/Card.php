<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function list()
    {
        $this->belongsTo(List::class);
    }
}
