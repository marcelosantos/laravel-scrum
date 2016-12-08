<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;

class ListingCardController extends Controller
{
    public function index($listingId)
    {
        return Card::OfListing($listingId)->paginate();
    }

    public function store(Request $request)
    {

    }
}
