<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data_get = file_get_contents('https://cdn.rawgit.com/rayriffy/maimai-json/9a48403a/seed.json');
        $json_a = json_decode($data_get, true);
        foreach ($json_a['pops'] as $dat) {
            $pops = new App\POPS();
            $pops->name_en = $dat["name"]["en"];
            $pops->name_jp = $dat["name"]["jp"];
            $pops->artist_en = $dat["artist"]["en"];
            $pops->artist_jp = $dat["artist"]["jp"];
            $pops->image_url = $dat["image_url"];
            $pops->version = $dat["version"];
            $pops->bpm = $dat["bpm"];
            $pops->level_easy = $dat["level"]["easy"];
            $pops->level_basic = $dat["level"]["basic"];
            $pops->level_advanced = $dat["level"]["advanced"];
            $pops->level_expert = $dat["level"]["expert"];
            $pops->level_master = $dat["level"]["master"];
            $pops->level_remaster = $dat["level"]["remaster"];
            $pops->listen_youtube = $dat["listen"]["youtube"];
            $pops->listen_niconico = $dat["listen"]["niconico"];
            $pops->regionlocked = $dat["regionlocked"];
            $pops->save();
        }
        foreach ($json_a['nico'] as $dat) {
            $nico = new App\NICO();
            $nico->name_en = $dat["name"]["en"];
            $nico->name_jp = $dat["name"]["jp"];
            $nico->artist_en = $dat["artist"]["en"];
            $nico->artist_jp = $dat["artist"]["jp"];
            $nico->image_url = $dat["image_url"];
            $nico->version = $dat["version"];
            $nico->bpm = $dat["bpm"];
            $nico->level_easy = $dat["level"]["easy"];
            $nico->level_basic = $dat["level"]["basic"];
            $nico->level_advanced = $dat["level"]["advanced"];
            $nico->level_expert = $dat["level"]["expert"];
            $nico->level_master = $dat["level"]["master"];
            $nico->level_remaster = $dat["level"]["remaster"];
            $nico->listen_youtube = $dat["listen"]["youtube"];
            $nico->listen_niconico = $dat["listen"]["niconico"];
            $nico->regionlocked = $dat["regionlocked"];
            $nico->save();
        }
        foreach ($json_a['toho'] as $dat) {
            $toho = new App\TOHO();
            $toho->name_en = $dat["name"]["en"];
            $toho->name_jp = $dat["name"]["jp"];
            $toho->artist_en = $dat["artist"]["en"];
            $toho->artist_jp = $dat["artist"]["jp"];
            $toho->image_url = $dat["image_url"];
            $toho->version = $dat["version"];
            $toho->bpm = $dat["bpm"];
            $toho->level_easy = $dat["level"]["easy"];
            $toho->level_basic = $dat["level"]["basic"];
            $toho->level_advanced = $dat["level"]["advanced"];
            $toho->level_expert = $dat["level"]["expert"];
            $toho->level_master = $dat["level"]["master"];
            $toho->level_remaster = $dat["level"]["remaster"];
            $toho->listen_youtube = $dat["listen"]["youtube"];
            $toho->listen_niconico = $dat["listen"]["niconico"];
            $toho->regionlocked = $dat["regionlocked"];
            $toho->save();
        }
        foreach ($json_a['sega'] as $dat) {
            $sega = new App\SEGA();
            $sega->name_en = $dat["name"]["en"];
            $sega->name_jp = $dat["name"]["jp"];
            $sega->artist_en = $dat["artist"]["en"];
            $sega->artist_jp = $dat["artist"]["jp"];
            $sega->image_url = $dat["image_url"];
            $sega->version = $dat["version"];
            $sega->bpm = $dat["bpm"];
            $sega->level_easy = $dat["level"]["easy"];
            $sega->level_basic = $dat["level"]["basic"];
            $sega->level_advanced = $dat["level"]["advanced"];
            $sega->level_expert = $dat["level"]["expert"];
            $sega->level_master = $dat["level"]["master"];
            $sega->level_remaster = $dat["level"]["remaster"];
            $sega->listen_youtube = $dat["listen"]["youtube"];
            $sega->listen_niconico = $dat["listen"]["niconico"];
            $sega->regionlocked = $dat["regionlocked"];
            $sega->save();
        }
        foreach ($json_a['game'] as $dat) {
            $game = new App\GAME();
            $game->name_en = $dat["name"]["en"];
            $game->name_jp = $dat["name"]["jp"];
            $game->artist_en = $dat["artist"]["en"];
            $game->artist_jp = $dat["artist"]["jp"];
            $game->image_url = $dat["image_url"];
            $game->version = $dat["version"];
            $game->bpm = $dat["bpm"];
            $game->level_easy = $dat["level"]["easy"];
            $game->level_basic = $dat["level"]["basic"];
            $game->level_advanced = $dat["level"]["advanced"];
            $game->level_expert = $dat["level"]["expert"];
            $game->level_master = $dat["level"]["master"];
            $game->level_remaster = $dat["level"]["remaster"];
            $game->listen_youtube = $dat["listen"]["youtube"];
            $game->listen_niconico = $dat["listen"]["niconico"];
            $game->regionlocked = $dat["regionlocked"];
            $game->save();
        }
        foreach ($json_a['orig'] as $dat) {
            $orig = new App\ORIG();
            $orig->name_en = $dat["name"]["en"];
            $orig->name_jp = $dat["name"]["jp"];
            $orig->artist_en = $dat["artist"]["en"];
            $orig->artist_jp = $dat["artist"]["jp"];
            $orig->image_url = $dat["image_url"];
            $orig->version = $dat["version"];
            $orig->bpm = $dat["bpm"];
            $orig->level_easy = $dat["level"]["easy"];
            $orig->level_basic = $dat["level"]["basic"];
            $orig->level_advanced = $dat["level"]["advanced"];
            $orig->level_expert = $dat["level"]["expert"];
            $orig->level_master = $dat["level"]["master"];
            $orig->level_remaster = $dat["level"]["remaster"];
            $orig->listen_youtube = $dat["listen"]["youtube"];
            $orig->listen_niconico = $dat["listen"]["niconico"];
            $orig->regionlocked = $dat["regionlocked"];
            $orig->save();
        }
    }
}
