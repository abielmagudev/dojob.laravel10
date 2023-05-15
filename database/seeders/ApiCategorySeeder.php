<?php

namespace Database\Seeders;

use App\Api\Server\ApiCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        $counter = count(ApiCategory::stock());
        
        ApiCategory::factory( $counter )->create();
    }
}
