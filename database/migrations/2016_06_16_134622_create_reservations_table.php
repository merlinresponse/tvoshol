<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aantal');
            $table->string('voornaam');
            $table->string('naam');
            $table->string('email');
            $table->string('tel');
            $table->text('opmerkingen')->nullable();
            $table->boolean('bevestigd')->default(0);
            $table->string('datetime');
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
        Schema::drop('reservations');
    }
}
