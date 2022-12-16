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
        Schema::create('accounts_need_reviews', function (Blueprint $table) {
            $table->id('accounts_need_review_id');
            $table->text('name');
            $table->text('email');
            $table->text('message');
            $table->text('url');
            $table->text('status')->default(0);
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
        Schema::dropIfExists('accounts_need_reviews');
    }
};
