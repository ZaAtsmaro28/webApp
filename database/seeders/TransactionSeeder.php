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
                'date'      => '2025-01-10',
                'coa_code'  => '401',
                'coa_name'  => 'Gaji Karyawan',
                'desc'      => 'Penerimaan gaji bulanan',
                'debit'     => '5000000',
                'credit'    => '0',
            ],
            [
                'date'      => '2025-01-11',
                'coa_code'  => '604',
                'coa_name'  => 'Makan Siang',
                'desc'      => 'Biaya makan siang kantor',
                'debit'     => '0',
                'credit'    => '150000',
            ],
            [
                'date'      => '2025-01-12',
                'coa_code'  => '402',
                'coa_name'  => 'Gaji Ketua MPR',
                'desc'      => 'Pendapatan sebagai ketum MPR',
                'debit'     => '5200000',
                'credit'    => '0',
            ],
            [
                'date'      => '2025-01-13',
                'coa_code'  => '602',
                'coa_name'  => 'Bensin',
                'desc'      => 'Pengeluaran transportasi',
                'debit'     => '0',
                'credit'    => '80000',
            ]
        ]);
    }
}
