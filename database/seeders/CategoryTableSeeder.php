<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['title' => "Laravel"]);
        Category::create(['title' => "Programming"]);
        Category::create(['title' => "Php"]);
        Category::create(['title' => "Python"]);
        Category::create(['title' => "java"]);
        Category::create(['title' => "Html"]);
    }
}
