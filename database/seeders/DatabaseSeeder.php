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
        // User::factory(10)->create();
          
        $this->call([
          RoleSeeder::class,
          PermissionSeeder::class,
          TagSeeder::class,
          StakeholderSeeder::class,
          ContractSeeder::class,
          UserSeeder::class,
          DocumentSeeder::class,
          DocumentTagSeeder::class,
          DocumentUserSeeder::class,
          ContractDocumentSeeder::class,
          ContractUserSeeder::class,
          StepSeeder::class,
          StepSeeder2::class,
          LetterSeeder::class,
          AttachmentSeeder::class,
        ]);
    }
}
