<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('title');
            $table->string('language')->withcomment('DilSeçimi');
            $table->longText('content_text');
            $table->string('content_url_slug')->comment('url için girilicek');
            $table->longText('photo_1');
            $table->longText('photo_2');
            $table->longText('photo_3');
            $table->longText('photo_4');
            $table->longText('photo_5');
            $table->longText('photo_6');
            $table->longText('photo_7');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
