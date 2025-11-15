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
            ['name' => 'Salary'],
            ['name' => 'Other Income'],
            ['name' => 'Family Expense'],
            ['name' => 'Transport Expense'],
            ['name' => 'Meal Expense']
        ]);
    }
}
