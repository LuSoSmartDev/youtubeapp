<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_id');
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('uploaded_date')->nullable();
            $table->string('duration');
            $table->string('user_token')->nullable();//for user 
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
        Schema::dropIfExists('u_videos');
    }
}
