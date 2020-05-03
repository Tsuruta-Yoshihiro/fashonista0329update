<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->string('user_id');
            $table->string('img_upload_file');
            $table->string('coordination_summary')->nullable;
            $table->string('item1');
            $table->string('item2')->nullable;
            $table->string('item3')->nullable;
            $table->string('item4')->nullable;
            $table->string('item5')->nullable;
            $table->string('item6')->nullable;
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
        Schema::dropIfExists('posts');
    }
}
