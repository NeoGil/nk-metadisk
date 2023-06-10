<?php

namespace Database\Seeders;

use App\Models\Fragment;
use App\Models\Guide;
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
        // \App\Models\User::factory(10)->create();

        $guides = Guide::factory(5)->create();

        $guides->each(function ($guide) {
           Fragment::factory(15)->create([
              'guide_id' => $guide->id
           ]);
        });
    }
}
