<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('location_id');
            $table->string('address');
            $table->float('lat');
            $table->float('lon');
            $table->string('description');
            $table->string('features');
            $table->integer('people_minimum');
            $table->integer('people_maximum');
            $table->float('price_per_hour');
            $table->string('main_photo')->nullable();
            $table->string('gallery');
            $table->boolean('is_featured');
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
        Schema::dropIfExists('venues');
    }
}
