<?php

namespace Database\Seeders;

use App\Models\ApiPlugin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiPluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApiPlugin::factory( ApiPlugin::counter() )->create();
    }
}
