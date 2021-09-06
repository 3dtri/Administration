<?php

use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert([
            'nom' => 'ali',
            'prenom' => 'ben ali',
            'tel'=>'58866002',
            'user_id' => 1,
        ]);
    }
}
