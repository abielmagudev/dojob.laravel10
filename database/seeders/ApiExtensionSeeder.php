<?php

namespace Database\Seeders;

use App\Api\Server\ApiExtension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = count(ApiExtension::stock());
        
        ApiExtension::factory( $counter )->create();
    }
}
