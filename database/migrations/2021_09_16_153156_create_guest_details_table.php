<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_details', function (Blueprint $table) {
            $table->id('Guest_Details_ID');
            $table->foreignID('Guest_ID')->constrained('guests','Guest_ID');
            $table->foreignID('Hotel_ID')->constrained('hotels','Hotel_ID');
            $table->foreignID('Tour_ID')->constrained('tourcompanies','Tour_ID');
            $table->foreignID('Program_ID')->constrained('programs','Program_ID');
            $table->integer('N_Adults');
            $table->integer('N_Child');
            $table->date('Reservation_Date');
            $table->date('Booking_Date');
            $table->boolean('Walkings');
            $table->boolean('Credit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_details');
    }
}
