<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }

    public function testListingList()
    {

        $listings = factory(\App\Listing::class,3)->create();

        $this->get(route('listing.index'))
             ->assertResponseOk();

       array_map(function($listing){
           $this->seeJson($listing->jsonSerialize());
       }, $listings->all());

    }

    public function testListingCardsList()
    {

        $listing = factory(\App\Listing::class)->create();
        $listing->cards()->saveMany(factory(\App\Card::class, 3)->make());

        $this->get(route('listing.cards.index', ['listings' => $listing->id]))
             ->assertResponseOk();

       array_map(function($card){
           $this->seeJson($card->jsonSerialize());
       }, $listing->cards->all());

    }
}
