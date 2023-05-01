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
        Category::create(['title' =>'Drama']);
        Category::create(['title' =>'Comedia']);
        Category::create(['title' =>'Western']);
        Category::create(['title' =>'Musical']);
    }
}
