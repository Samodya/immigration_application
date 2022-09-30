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
            $table->dropColumn('is_surname');
            $table->dropColumn('changed_name');
            $table->dropColumn('is_job');
            $table->dropColumn('designation');
            $table->dropColumn('is_ident');
            $table->dropColumn('insert_id');
            $table->dropColumn('is_valid_exten');
            $table->dropColumn('years');
            $table->dropColumn('is_journey');
            $table->dropColumn('is_ammendments');
            $table->dropColumn('amendments');
        });
    }
};
