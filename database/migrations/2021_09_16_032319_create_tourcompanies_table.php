<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourcompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourcompanies', function (Blueprint $table) {
            // $table->id('Tour_ID');
           $table->string('Tour_ID',4)->primary();
           // $table->primary('Tour_ID');
            $table->string('Tour_Com_Name');
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
        Schema::dropIfExists('tourcompanies');
    }
}
