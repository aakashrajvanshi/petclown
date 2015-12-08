<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('petition_to');
            $table->string('heading');
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('image_thumb')->nullable();
            $table->string('slug');
            $table->string('review_comment')->nullable();
            $table->string('publish_comment')->nullable();
            $table->boolean('allow_editing')->default(TRUE);
            $table->string('ip_addr')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ideas');
    }
}
