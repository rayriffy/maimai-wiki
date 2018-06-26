<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampAndId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pops', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('nico', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('toho', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('sega', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('game', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('orig', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::table('pops', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
        Schema::table('nico', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
        Schema::table('toho', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
        Schema::table('sega', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
        Schema::table('game', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
        Schema::table('orig', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('id');
        });
    }
}
