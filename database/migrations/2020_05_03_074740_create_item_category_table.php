<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_category', function (Blueprint $table) {
            $table->primary(['category_id', 'item_id']);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id','FRK_game_category_category_id')->references('id')->on('category')->onDelete('cascade');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id','FRK_game_category_item_id')->references('id')->on('item')->onDelete('cascade');
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
        Schema::dropIfExists('game_category');
    }
}
