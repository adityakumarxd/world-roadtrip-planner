<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripPlacesTable extends Migration
{
    public function up()
    {
        Schema::create('trip_places', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_trip_id')->constrained('road_trips')->onDelete('cascade');
            $table->string('place_name');
            $table->text('place_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_places');
    }
}
