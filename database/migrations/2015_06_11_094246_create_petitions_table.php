<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('petition_to');
            $table->string('heading');
            $table->string('content',2550);
            $table->string('image')->nullable();
            $table->string('image_thumb')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('user_support_petition', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('petition_id')->unsigned();
            $table->foreign('petition_id')->references('id')->on('petitions')->onDelete('cascade');
            $table->primary(array('user_id', 'petition_id'));
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
        Schema::drop('user_support_petition');
        Schema::drop('petitions');
    }
}
