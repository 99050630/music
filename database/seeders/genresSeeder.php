<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class genresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre' => "rock"
        ]);
        DB::table('genres')->insert([
            'genre' => "pop"
        ]);
        DB::table('genres')->insert([
            'genre' => "classic"
        ]);
        DB::table('genres')->insert([
            'genre' => "hip hop"
        ]);
        DB::table('genres')->insert([
            'genre' => "dance"
        ]);
    }
}
