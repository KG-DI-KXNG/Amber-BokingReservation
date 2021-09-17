<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class hotels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\hotels::truncate();
        \App\Models\hotels::create(['Hotel_ID' => 'GBPJ', 'Hotel_Name' => 'Gran Bahia Principe Jamaica Hotel', 'Hotel_Location'=>'Montego Bay']);
        \App\Models\hotels::create(['Hotel_ID' => 'GLBH', 'Hotel_Name' => 'Grand Lido Braco Hotel', 'Hotel_Location' => 'Montego Bay']);

        \App\Models\hotels::create(['Hotel_ID' => 'STBR', 'Hotel_Name' => 'Starfish Trelawny Beach Resort', 'Hotel_Location' => 'Falmouth']);

        App\Models\hotels::create(['Hotel_ID' => 'FDRP', 'Hotel_Name' => 'FDR Pebbles Hotel ', 'Hotel_Location' => 'Falmouth']);

        \App\Models\hotels::create(['Hotel_ID' => 'CSCR', 'Hotel_Name' => 'Coral Seas Cliff Resort ', 'Hotel_Location' => 'Negril']);

        \App\Models\hotels::create(['Hotel_ID' => 'CSAH', 'Hotel_Name' => 'Couples Swept Away Hotel ', 'Hotel_Location' => 'Negril']);

        \App\Models\hotels::create(['Hotel_ID' => 'HIII', 'Hotel_Name' => 'Hedonism III Resort', 'Hotel_Location' => 'Ocho Rios']);

        \App\Models\hotels::create(['Hotel_ID' => 'BRZH', 'Hotel_Name' => 'Breezes Hotel', 'Hotel_Location' => 'Ocho Rios']);
    }
}
