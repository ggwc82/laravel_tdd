<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewConcertListingTest extends TestCase
{

    // use DatabaseMigrations;

    /** @test */

    function user_can_view_a_concert_listing()
    {
        // Arrange
        // Create a concert listing

        $concert = Concert::create([
            'title' => 'The Red Chord',
            'subtitle' => 'with Animosity and Lethargy',
            'time' => Carbon::parse('December 13, 2016 8:00pm'),
            'price' => 3250,
            'venue' => 'The Mosh Pit',
            'address' => '123 Example Lane',
            'city' => 'Laraville',
            'postcode' => 'ON 17916',
            'additional_info' => 'For tickets, call (555) 555-5555.'
        ]);


        // Act
        // View a concert listing

        $this->visit('/concerts/' . $concert->id);
        
        // Assert
        // See a concert listing

        $this->see('The Red Chord');
        $this->see('with Animosity and Lethargy');
        $this->see('December 13, 2016 8:00pm');
        $this->see('32.50');
        $this->see('The Mosh Pit');
        $this->see('123 Example Lane');
        $this->see('Laraville');
        $this->see('ON 17916');
        $this->see('For tickets, call (555) 555-5555.');


    }
}
