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
        // \App\Models\User::factory(10)->create();

        
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(RepositorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(LaravelVersionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ScoreSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
    }
}
