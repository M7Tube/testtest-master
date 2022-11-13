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
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id('app_setting_id');
            $table->text('en_peronal_name');
            $table->text('ar_peronal_name');
            $table->text('en_peronal_desc');
            $table->text('ar_peronal_desc');
            $table->text('en_job_title');
            $table->text('ar_job_title');
            $table->text('en_skills');
            $table->text('ar_skills');
            $table->text('en_contactWithUs_message');
            $table->text('ar_contactWithUs_message');
            $table->text('email');
            $table->text('phone');
            $table->text('small_personal_pic');
            $table->text('big_personal_pic');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('linkedIn');
            $table->text('location');
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
        Schema::dropIfExists('app_settings');
    }
};
