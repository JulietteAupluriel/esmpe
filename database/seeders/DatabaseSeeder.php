<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create();
        \App\Models\Filter::factory(3)->create();
        \App\Models\Event::factory(6)->hasParticipants(4)->create();
        \App\Models\General::factory(1)->create();
        \App\Models\Logo::factory(6)->create();

    }
}
