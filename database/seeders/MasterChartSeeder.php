<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_charts')->insert([
            [
                'coa_code' => '401',
                'name' => 'Gaji Karyawan',
                'category_id' => DB::table('categories')->where('category_name', 'Salary')->firstOrFail()->id
            ],
            [
                'coa_code' => '402',
                'name' => 'Gaji Ketua MPR',
                'category_id' => DB::table('categories')->where('category_name', 'Salary')->firstOrFail()->id
            ],
            [
                'coa_code' => '403',
                'name' => 'Profit Trading',
                'category_id' => DB::table('categories')->where('category_name', 'Other Income')->firstOrFail()->id
            ],
            [
                'coa_code' => '601',
                'name' => 'Biaya Sekolah',
                'category_id' => DB::table('categories')->where('category_name', 'Family Expense')->firstOrFail()->id
            ],
            [
                'coa_code' => '602',
                'name' => 'Bensin',
                'category_id' => DB::table('categories')->where('category_name', 'Transport Expense')->firstOrFail()->id
            ],
            [
                'coa_code' => '603',
                'name' => 'Parkir',
                'category_id' => DB::table('categories')->where('category_name', 'Transport Expense')->firstOrFail()->id
            ],
            [
                'coa_code' => '604',
                'name' => 'Makan Siang',
                'category_id' => DB::table('categories')->where('category_name', 'Meal Expense')->firstOrFail()->id
            ],
            [
                'coa_code' => '605',
                'name' => 'Makanan Pokok Bulanan',
                'category_id' => DB::table('categories')->where('category_name', 'Meal Expense')->firstOrFail()->id
            ]
        ]);
    }
}
