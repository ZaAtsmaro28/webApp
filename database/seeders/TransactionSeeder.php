<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'date'      => '2025-04-10',
                'coa_code'  => DB::table('master_charts')
                    ->where('name', 'Gaji Karyawan')
                    ->firstOrFail()->coa_code,
                'desc'      => 'Penerimaan gaji bulanan',
                'debit'     => '0',
                'credit'    => '5000000',
            ],
            [
                'date'      => '2025-01-11',
                'coa_code'  => DB::table('master_charts')
                    ->where('name', 'Makan Siang')
                    ->firstOrFail()->coa_code,
                'desc'      => 'Biaya makan siang kantor',
                'debit'     => '150000',
                'credit'    => '0',
            ],
            [
                'date'      => '2025-06-12',
                'coa_code'  => DB::table('master_charts')
                    ->where('name', 'Gaji Ketua MPR')
                    ->firstOrFail()->coa_code,
                'desc'      => 'Pendapatan sebagai ketum MPR',
                'debit'     => '0',
                'credit'    => '5200000',
            ],
            [
                'date'      => '2025-01-13',
                'coa_code'  => DB::table('master_charts')
                    ->where('name', 'Bensin')
                    ->firstOrFail()->coa_code,
                'desc'      => 'Pengeluaran transportasi',
                'debit'     => '80000',
                'credit'    => '0',
            ]
        ]);
    }
}
