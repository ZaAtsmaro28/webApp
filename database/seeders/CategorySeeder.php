<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Salary'],
            ['category_name' => 'Other Income'],
            ['category_name' => 'Family Expense'],
            ['category_name' => 'Transport Expense'],
            ['category_name' => 'Meal Expense']
        ]);
    }
}
