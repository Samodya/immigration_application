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
        Schema::create('_info_b', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Application_id')->unique();
            $table->boolean('is_surname')->default(0);
            $table->String('changed_name');
            $table->boolean('is_job')->default(0);
            $table->String('designation');
            $table->boolean('is_ident')->default(0);
            $table->String('insert_id');
            $table->boolean('is_valid_exten')->default(0);
            $table->integer('years');
            $table->boolean('is_journey')->default(0);
            $table->boolean('is_ammendments')->default(0);
            $table->String('amendments');
            $table->timestamps();

            $table->foreign('Application_id')->references('id')->on('information_a_s')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_info_b');
    }
};
