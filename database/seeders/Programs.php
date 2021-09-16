<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Programs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\program::truncate();
        \App\Models\program::create(['Program_Name' => 'Dolphin Encounter Memories', 'Program_ID'=>'DEM','Adult'=>'139','Child'=>'139']);
        \App\Models\program::create(['Program_Name' => 'Dolphin Swim Adventure Memories', 'Program_ID'=>'DSWM','Adult'=>'169','Child'=>'139']);
        \App\Models\program::create(['Program_Name' => 'Dolphin Royal Swim Memories', 'Program_ID'=>'DRSM','Adult'=>'199','Child'=>'139']);
        \App\Models\program::create(['Program_Name' => 'Dolphin Swim Adventure', 'Program_ID'=>'DSM','Adult'=>'149','Child'=>'109']);
        \App\Models\program::create(['Program_Name' => 'Shark Encounter', 'Program_ID'=>'SE','Adult'=>'69','Child'=>'69']);
        \App\Models\program::create(['Program_Name' => 'Encounter', 'Program_ID'=>'E','Adult'=>'109','Child'=>'109']);
        \App\Models\program::create(['Program_Name' => 'Admission Plus', 'Program_ID'=>'AP','Adult'=>'69','Child'=>'45']);
        \App\Models\program::create(['Program_Name' => 'Dolphin Royal Swim', 'Program_ID'=>'DPS','Adult'=>'189','Child'=>'109']);
        \App\Models\program::create(['Program_Name' => 'Yaaman Adventures + Swim with Dolphins', 'Program_ID'=>'YASD','Adult'=>'149','Child'=>'149']);

    }
}
