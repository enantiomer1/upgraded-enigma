<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('title')->default('');
            $table->string('slug')->default('');
            $table->text('description')->nullable();
            $table->mediumText('content')->nullable();
            $table->string('section')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_text')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('status')->default('draft');
            $table->datetime('published_date')->nullable();
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
