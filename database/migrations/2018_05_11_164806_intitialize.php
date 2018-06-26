<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Intitialize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pops', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
        Schema::create('nico', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
        Schema::create('toho', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
        Schema::create('sega', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
        Schema::create('game', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
        Schema::create('orig', function (Blueprint $table) {
            $table->text('name_en');
            $table->text('name_jp');
            $table->text('artist_en');
            $table->text('artist_jp');
            $table->text('image_url');
            $table->text('version');
            $table->integer('bpm');
            $table->text('level_easy');
            $table->text('level_basic');
            $table->text('level_advanced');
            $table->text('level_expert');
            $table->text('level_master');
            $table->text('level_remaster')->nullable();
            $table->text('listen_youtube');
            $table->text('listen_niconico')->nullable();
            $table->boolean('regionlocked');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pops');
        Schema::drop('nico');
        Schema::drop('toho');
        Schema::drop('sega');
        Schema::drop('game');
        Schema::drop('orig');
    }
}
