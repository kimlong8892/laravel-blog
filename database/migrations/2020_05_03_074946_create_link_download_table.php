<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_download', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('src');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id','FRK_link_download_item_id')->references('id')->on('item')->onDelete('cascade');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id','FRK_link_download_type_id')->references('id')->on('type_link')->onDelete('cascade');
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
        Schema::dropIfExists('link_download');
    }
}
