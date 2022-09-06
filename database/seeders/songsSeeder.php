<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\songs;

class songsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        songs::factory()->count(50)->create();
    }
}
