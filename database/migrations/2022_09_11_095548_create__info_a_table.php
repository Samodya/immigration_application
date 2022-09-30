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
        Schema::create('_info_a', function (Blueprint $table) {
            $table->increments('id');
            $table->String('passport_no');
            $table->String('surname');
            $table->String('other_surnames');
            $table->String('perm_address');
            $table->bigInteger('telephone');
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
        Schema::dropIfExists('_info_a');
    }
};
