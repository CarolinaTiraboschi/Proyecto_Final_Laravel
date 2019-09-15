<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_user', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('follower_id');
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('followee_id');
            $table->foreign('followee_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_user');
    }
}
