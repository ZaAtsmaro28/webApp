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
            [
                'category_name' => 'Salary',
                'type' => 'income'
            ],
            [
                'category_name' => 'Other Income',
                'type' => 'income'
            ],
            [
                'category_name' => 'Family Expense',
                'type' => 'expense'
            ],
            [
                'category_name' => 'Transport Expense',
                'type' => 'expense'
            ],
            [
                'category_name' => 'Meal Expense',
                'type' => 'expense'
            ],
        ]);

    }
}
