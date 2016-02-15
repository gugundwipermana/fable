<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('firstquote', 30);
            $table->string('lastquote', 30);
            $table->string('video', 100);
            $table->string('music', 100);
            $table->string('title', 15);
            $table->string('band', 10);
            $table->string('album', 15);
            $table->date('date');

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
        Schema::drop('covers');
    }
}
