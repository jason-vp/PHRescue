<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date')->nullable();
            $table->enum('sex', ['Male', 'Female']);
            $table->float('weight')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('ternary_color')->nullable();
            $table->date('entry_date');
            $table->string('microchip_number')->nullable();
            $table->date('microchip_date')->nullable();
            $table->string('passport_number')->nullable();;
            $table->boolean('public_advertisement');
            $table->integer('found_at_city')->unsigned();
            $table->text('found_observations')->nullable();
            $table->string('character_type')->nullable();
            $table->text('character_observations')->nullable();
            $table->text('general_observations')->nullable();
            $table->integer('animalable_id');
            $table->string('animalable_type');
            $table->integer('breed_id')->unsigned();
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('animals', function (Blueprint $table) {
            $table->foreign('found_at_city')->references('id')->on('cities');
        });
        Schema::table('animals', function (Blueprint $table) {
            $table->foreign('breed_id')->references('id')->on('breeds');
        });

        Schema::create('animal_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('animal_id')->unsigned();
            $table->string('path');
            $table->timestamps();
        });
        Schema::table('animal_photos', function(Blueprint $table) {
            $table->foreign('animal_id')->references('id')->on('animals');
        });

        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->float('length')->nullable();
            $table->float('height')->nullable();
            $table->timestamps();
        });

        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coat')->nullable();
            $table->timestamps();
        });

        Schema::create('exotics', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::table('animal_photos', function(Blueprint $table) {
            $table->dropForeign(['animal_id']);
        });
        Schema::drop('animal_photos');

        Schema::table('animals', function(Blueprint $table) {
            $table->dropForeign(['found_at_city']);
        });
        Schema::table('animals', function(Blueprint $table) {
            $table->dropForeign(['breed_id']);
        });
        Schema::drop('animals');

        Schema::drop('dogs');

        Schema::drop('cats');

        Schema::drop('exotics');
    }
}
