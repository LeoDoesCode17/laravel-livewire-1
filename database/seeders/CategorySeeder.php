<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Category::factory()->create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);
        Category::factory()->create([
            'name' => 'Internet Of Things',
            'slug' => 'internet-of-things'
        ]);
        Category::factory()->create([
            'name' => 'World Finance',
            'slug' => 'world-finance'
        ]);
        Category::factory()->create([
            'name' => 'Natural Science',
            'slug' => 'natural-science'
        ]);
    }
}
