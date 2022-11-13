<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->text('ar_name');
            $table->text('en_name');
            $table->text('ar_desc');
            $table->text('en_desc');
            $table->text('picture');
            $table->bigInteger('price')->nullable();
            $table->text('buy_link')->nullable();
            $table->text('buy_link_text')->nullable();
            $table->text('ar_buy_link_title_text')->nullable();
            $table->text('en_buy_link_title_text')->nullable();
            $table->boolean('free_item_with_email_send')->nullable();
            $table->text('email_text')->nullable();
            $table->text('email_file')->nullable();
            $table->bigInteger('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade')->index()->unsigned();
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
        Schema::dropIfExists('items');
    }
};
