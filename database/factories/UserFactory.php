<?php

namespace Database\Factories;

use App\Models\GuestDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GuestDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    private $counter = 1;
    
    public function definition()
    {
        
        return [

            'Guest_Details_ID' => 'AB'.$this->counter++,
            'First_name' => $this->faker->name(),
            'Last_name' => $this->faker->name(),
            'Hotel Name' => $this->faker->randomElement(['Gran Bahia Principe Jamaica Hotel', 'Grand Lido Braco Hotel','Starfish Trelawny Beach Resort','FDR Pebbles Hotel','Coral Seas Cliff Resort','Couples Swept Away Hotel','Hedonism III Resort','Breezes Hotel']),
            'Tour Company' => $this->faker->randomElement(['Real Tours Jamaica', 'Know Jamaica Tours','Jamaica Tours Limited','Walk-In']),
            'Program ID' =>  $this->faker->randomElement(['DEM','DSAM','DRSM','DSA','SE','E','AP','DRS','YASD']),
            'N_Adults' => $this->faker->numberBetween(1,10), 
            'N_Child' => $this->faker->numberBetween(1,5), 
            'Reservation_Date' => $this->faker->dateTimeThisMonth(), 
            'Booking_Date' => now(), 
            'Walkings' => $this->faker->boolean($chanceOfGettingTrue = 50), 
            'Credit' => $this->faker->boolean($chanceOfGettingTrue = 50)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
