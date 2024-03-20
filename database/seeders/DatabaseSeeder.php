<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                OneWinReglamentSeeder::class,
                InfrastricturPlaneSeeder::class,
                ContactSeeder::class,
                SovetSeeder::class,
                IndustrealAreaSeeder::class,
                SupportSeeder::class,
                MunitipalStandartSeeder::class,
                InvestProjectSeeder::class,
                OptionSeeder::class,
                PageSeeder::class,
                MenuSeeder::class,
                UserSeeder::class,
                AreaSeeder::class,
                PolResursSeeder::class,
                InvestDocumentSeeder::class,
                NewsSeeder::class,
                SupportSeeder::class
            ]
        );

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
