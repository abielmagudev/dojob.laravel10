<?php

namespace Database\Seeders;

use App\Api\Server\ApiExtension;
use App\Models\Extension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = mt_rand(1, ApiExtension::all()->count());
        
        Extension::factory( $counter )->create();
    }
}
