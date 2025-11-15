@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('category.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
           Tambah Kategori
        </a>
    </div>

    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Nama Kategori</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td class="px-4 py-2 border">{{ $category->id }}</td>
                <td class="px-4 py-2 border">{{ $category->name }}</td>
                <td class="px-4 py-2 border flex gap-2.5">

                    <a href="{{ route('category.edit', $category->id) }}" 
                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                       Edit
                    </a>

                    <form action="{{ route('category.destroy', $category->name) }}" 
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
