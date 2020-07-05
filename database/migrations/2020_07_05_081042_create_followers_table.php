<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->primary(['users_id', 'users_followers_id']);
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('users_followers_id')->unsigned();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('users_followers_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
