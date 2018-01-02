<?php

use App\Concert;
use Carbon\Carbon;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConcertTest extends TestCase
{   
    use DatabaseMigrations;

    /** @test */

    function can_get_formatted_date()
    {

        //Arrange
        //Create a concert with a known date

        $concert = factory(Concert::class)->create([
            'date' => Carbon::parse('2016-12-01 8:00pm'),
        ]);


        //Act
        
        $date = $concert->formatted_date;


        //Assert

        $this->assertEquals('December 1, 2016', $date);


    }
}