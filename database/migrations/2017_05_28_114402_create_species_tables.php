<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('species_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('breeds', function(Blueprint $table) {
                $table->foreign('species_id')->references('id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breeds', function(Blueprint $table) {
            $table->dropForeign(['species_id']);
        });
        Schema::drop('breeds');

        Schema::drop('species');
    }
}
