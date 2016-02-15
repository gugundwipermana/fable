<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 30);

            $table->string('type', 1);

            $table->string('title', 50);
            $table->text('description');

            $table->string('facebook', 100);
            $table->string('twitter', 100);
            $table->string('instagram', 100);

            $table->string('image', 100);
            $table->string('background', 100);

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
        Schema::drop('djs');
    }
}
