<?php

namespace Database\Seeders;

use App\Models\HamaCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PenyakitCategorySeeder::class);
        $this->call(PenyakitSeeder::class);
    }
}