@extends('layouts.app')

@section('content')

    <form action="{{ route('category.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <label class="block mb-2 font-semibold">Nama Kategori</label>
        <input type="text" name="category_name" 
               class="w-full px-3 py-2 border rounded mb-4">

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Simpan
        </button>

        <a href="{{ route('category.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>
    </form>

@endsection
