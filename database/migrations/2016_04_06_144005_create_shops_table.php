<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('posnumber');
            $table->string('posname');
            $table->text('extra');
            $table->boolean('tent');
            $table->boolean('lantaarn');
            $table->boolean('ipad');
            $table->boolean('beachvlag');
            $table->string('ipadnummer');
            $table->boolean('contact');
            $table->date('afleverdatum');
            $table->time('aflevertijd');
            $table->date('ophaaldatum');
            $table->time('ophaaltijd');
            $table->boolean('flushed');
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
        Schema::drop('shops');
    }
}
