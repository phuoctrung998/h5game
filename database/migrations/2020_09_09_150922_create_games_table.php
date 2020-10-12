<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->integer('cate_id');
            $table->string('slug',255);
            $table->string('images',255);
            $table->integer('status');
            $table->string('platform',255);
            $table->string('game_url',255);
            $table->integer('views');
            $table->integer('flag_hot');
            $table->integer('likes');
            $table->integer('dislike');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
