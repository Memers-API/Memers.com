<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_user', function (Blueprint $table) {
          $table->bigIncrements('post_user_id');
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('post_id');
          $table->tinyInteger('is_dislike')->default(0);
          $table->text('comments')->nullable();

          //FOREIGN KEY CONSTRAINTS
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('post_id')->references('post_id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('post_user');
    }
}
