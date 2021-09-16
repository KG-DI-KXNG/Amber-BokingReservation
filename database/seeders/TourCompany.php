<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TourCompany extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\tourcompany::truncate();
        \App\Models\tourcompany::create(['Tour_ID' => 'RTJ', 'Tour_Com_Name'=>'Real Tours Jamaica']);
        \App\Models\tourcompany::create(['Tour_ID' => 'KJT', 'Tour_Com_Name'=>'Know Jamaica Tours']);
        \App\Models\tourcompany::create(['Tour_ID' => 'JTL', 'Tour_Com_Name'=>'Jamaica Tours Limited']);
        \App\Models\tourcompany::create(['Tour_ID' => 'WI', 'Tour_Com_Name'=>'Walk-In']);
    }
}