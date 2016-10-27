<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateportfoliosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->string('title', 50);
            $table->string('punchline', 255);
            $table->string('main_image', 255);
            $table->string('icon', 50);
            $table->string('about', 1024);
            $table->string('made_for', 255);
            $table->text('description');
            $table->string('video_link', 255);
            $table->string('lightbox_image', 255);
            $table->string('soundcloud_link', 255);
            $table->string('gallery', 50);
            $table->string('external_link', 255);
            $table->string('type', 255);
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
        Schema::drop('portfolios');
    }
}
