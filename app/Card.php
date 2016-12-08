<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function listing()
    {
        $this->belongsTo(Listing::class);
    }

    public function scopeOfListing($query, $listingId)
    {
        return $query->where('listing_id',$listingId);
    }
}
