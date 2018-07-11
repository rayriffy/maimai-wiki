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
        function convertdata($req)
        {
            foreach ($req as $dat) {
                $res[] = [
                    'name_en'         => $dat['name']['en'],
                    'name_jp'         => $dat['name']['jp'],
                    'artist_en'       => $dat['artist']['en'],
                    'artist_jp'       => $dat['artist']['jp'],
                    'image_url'       => $dat['image_url'],
                    'version'         => $dat['version'],
                    'bpm'             => $dat['bpm'],
                    'level_easy'      => $dat['level']['easy'],
                    'level_basic'     => $dat['level']['basic'],
                    'level_advanced'  => $dat['level']['advanced'],
                    'level_expert'    => $dat['level']['expert'],
                    'level_master'    => $dat['level']['master'],
                    'level_remaster'  => $dat['level']['remaster'],
                    'listen_youtube'  => $dat['listen']['youtube'],
                    'listen_niconico' => $dat['listen']['niconico'],
                    'regionlocked'    => $dat['regionlocked'],
                ];
            }

            return $res;
        }

        $data_get = file_get_contents('https://cdn.rawgit.com/rayriffy/maimai-json/9a48403a/seed.json');
        $json_a = json_decode($data_get, true);

        App\POPS::insert(convertdata($json_a['pops']));
        App\NICO::insert(convertdata($json_a['nico']));
        App\TOHO::insert(convertdata($json_a['toho']));
        App\SEGA::insert(convertdata($json_a['sega']));
        App\GAME::insert(convertdata($json_a['game']));
        App\ORIG::insert(convertdata($json_a['orig']));
    }
}
