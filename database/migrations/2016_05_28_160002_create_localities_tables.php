<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('regions', function(Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('localities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('localities', function(Blueprint $table) {
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localities', function(Blueprint $table) {
            $table->dropForeign(['region_id']);
        });
        Schema::drop('localities');

        Schema::table('regions', function(Blueprint $table) {
            $table->dropForeign(['country_id']);
        });
        Schema::drop('regions');

        Schema::drop('countries');
    }
}
