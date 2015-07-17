<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrivacyUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->boolean('private')->default(false);
            $table->string('slug')->nullable();
            $table->boolean('blocked')->default(false);
        });
        Schema::table('petitions', function ($table) {
            $table->boolean('published')->default(false);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('private', 'slug','blocked');
        });
        Schema::table('petitions', function ($table) {
            $table->dropColumn('published');
        });
    }
}
