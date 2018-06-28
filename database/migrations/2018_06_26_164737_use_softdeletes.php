<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UseSoftdeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pops', function (Blueprint $table) {
            $table->SoftDeletes();
        });
        Schema::table('nico', function (Blueprint $table) {
            $table->SoftDeletes();
        });
        Schema::table('toho', function (Blueprint $table) {
            $table->SoftDeletes();
        });
        Schema::table('sega', function (Blueprint $table) {
            $table->SoftDeletes();
        });
        Schema::table('game', function (Blueprint $table) {
            $table->SoftDeletes();
        });
        Schema::table('orig', function (Blueprint $table) {
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pops', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('nico', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('toho', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('sega', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('game', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
        Schema::table('orig', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
