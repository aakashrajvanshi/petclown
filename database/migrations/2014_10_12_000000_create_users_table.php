<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('verified')->default(false);
            $table->string('emailtoken')->nullable();
            $table->string('avatar')->default('/images/default/profile.jpg');
            $table->boolean('ismale')->nullable();
            $table->string('city',25)->nullable();
            $table->string('country',25)->nullable();
            $table->string('alternate_email',60)->nullable();
            $table->boolean('private')->default(false);
            $table->string('slug')->nullable();
            $table->boolean('blocked')->default(false);
            $table->boolean('newsletter')->default(true);
            $table->string('ip_register')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
