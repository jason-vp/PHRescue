<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->integer('entity_id')->unsigned();
            $table->string('nif')->unique();
            $table->timestamps();
        });

        Schema::table('persons', function(Blueprint $table) {
            $table->foreign('entity_id')->references('id')->on('entities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('persons', function(Blueprint $table) {
            $table->dropForeign(['entity_id']);
        });*/
        Schema::drop('persons');
    }
}
