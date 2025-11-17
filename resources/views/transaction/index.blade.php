@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Data Tabel Riwayat Transaksi</h2>

    <div class="mb-4">
        <a href="{{ route('category.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
           Transaksi Baru
        </a>
    </div>

    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Tanggal</th>
                <th class="px-4 py-2 border">Kode COA</th>
                <th class="px-4 py-2 border">Nama COA</th>
                <th class="px-4 py-2 border">Deskripsi</th>
                <th class="px-4 py-2 border">Debit</th>
                <th class="px-4 py-2 border">Kredit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td class="px-4 py-2 border">{{ $transaction->date }}</td>
                <td class="px-4 py-2 border">{{ $transaction->coa_code }}</td>
                <td class="px-4 py-2 border">{{ $transaction->coa_name }}</td>
                <td class="px-4 py-2 border">{{ $transaction->desc }}</td>
                <td class="px-4 py-2 border">{{ $transaction->debit }}</td>
                <td class="px-4 py-2 border">{{ $transaction->credit }}</td>
                <td class="px-4 py-2 border flex gap-2.5">

                    <a href="{{ route('transaction.edit', $transaction->id) }}" 
                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                       Edit
                    </a>

                    <form action="{{ route('category.destroy', $transaction->id) }}" 
                          method="POST"
                          onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
