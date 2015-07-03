<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->unique();
            $table->string('desc',200)->nullable();
        });

        Schema::create('category_petition', function(Blueprint $table)
        {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('petition_id')->unsigned();
            $table->foreign('petition_id')->references('id')->on('petitions')->onDelete('cascade');
            $table->primary(array('category_id', 'petition_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_petition');
        Schema::drop('categories');
    }
}
