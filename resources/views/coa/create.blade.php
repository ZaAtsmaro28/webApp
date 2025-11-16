@extends('layouts.app')

@section('content')

    <form action="{{ route('coa.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <label class="block mb-2 font-semibold">Kode COA</label>
        <input type="text" name="coa_code" 
               class="w-full px-3 py-2 border rounded mb-4">

        <label class="block mb-2 font-semibold">Nama Sumber</label>
        <input type="text" name="name" 
               class="w-full px-3 py-2 border rounded mb-4">

        <label class="block mb-2 font-semibold">Kategori</label>
        <select name="category" class="w-full px-3 py-2 border rounded mb-4">
            @foreach ($categories as $category)
                <option value="{{ $category->category_name }}">
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>       

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Simpan
        </button>

        <a href="{{ route('coa.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>
    </form>

@endsection
