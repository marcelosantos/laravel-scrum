<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;
//use App\Http\Request;
//use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function index()
    {
        return Listing::all();
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

}
