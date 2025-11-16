@extends('layouts.app')

@section('content')

    <h2 class="text-xl font-bold mb-4">Data Tabel Chart Of Account(COA)</h2>

    <div class="mb-4">
        <a href="{{ route('coa.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
           Tambah Sumber
        </a>
    </div>

    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">kode</th>
                <th class="px-4 py-2 border">Nama Sumber</th>
                <th class="px-4 py-2 border">Kategori</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td class="px-4 py-2 border">{{ $item->coa_code }}</td>
                <td class="px-4 py-2 border">{{ $item->name }}</td>
                <td class="px-4 py-2 border">{{ $item->category }}</td>
                <td class="px-4 py-2 border flex gap-2.5">

                    <a href="{{ route('coa.edit', $item->coa_code) }}" 
                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                       Edit
                    </a>

                    <form action="{{ route('coa.destroy', $item->coa_code) }}" 
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
