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
        Schema::table('_info_a', function (Blueprint $table) {
            $table->dropColumn('is_job');
            $table->dropColumn('is_valid_exten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_info_a', function (Blueprint $table) {
            $table->boolean('is_job')->default(0);
            $table->boolean('is_valid_exten')->default(0);
        });
    }
};
