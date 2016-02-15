<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_promos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('promo_id');
            $table->foreign('promo_id')
                  ->references('id')
                  ->on('promos')
                  ->onDelete('cascade');

            $table->string('name', 30);
            $table->integer('age')->length(3)->unsigned();
            $table->string('phone', 20);
            $table->string('email', 50);

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
        Schema::drop('reserve_promos');
    }
}
