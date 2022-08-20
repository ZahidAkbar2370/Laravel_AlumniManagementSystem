<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\AlimnusBio::factory(10)->create();
         \App\Models\Career::factory(10)->create();
         \App\Models\Course::factory(10)->create();
         \App\Models\Event::factory(10)->create();
         \App\Models\EventCommit::factory(10)->create();
         \App\Models\ForumComment::factory(10)->create();
         \App\Models\ForumTopic::factory(10)->create();
        \App\Models\Gallery::factory(10)->create();
        //  \App\Models\SystemSetting::factory(10)->create();
         \App\Models\User::factory(10)->create();
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
