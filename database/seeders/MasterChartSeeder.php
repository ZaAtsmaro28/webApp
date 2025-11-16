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
                'category' => 'Salary'
            ],
            [
                'coa_code' => '402',
                'name' => 'Gaji Ketua MPR',
                'category' => 'Salary'
            ],
            [
                'coa_code' => '403',
                'name' => 'Profit Trading',
                'category' => 'Other Income'
            ],
            [
                'coa_code' => '601',
                'name' => 'Biaya Sekolah',
                'category' => 'Family Expense'
            ],
            [
                'coa_code' => '402',
                'name' => 'Bensin',
                'category' => 'Transport'
            ],
            [
                'coa_code' => '603',
                'name' => 'Parkir',
                'category' => 'Transport'
            ],
            [
                'coa_code' => '604',
                'name' => 'Makan Siang',
                'category' => 'Meal Expense'
            ],
            [
                'coa_code' => '605',
                'name' => 'Makanan Pokok Bulanan',
                'category' => 'Meal Expense'
            ]
        ]);
    }
}
