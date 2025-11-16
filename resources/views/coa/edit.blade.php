@extends('layouts.app')

@section('content')
    <form action="{{ route('coa.update', $item->coa_code) }}" 
          method="POST"
          class="bg-white p-6 rounded shadow">
          
        @csrf
        @method('PUT')

        <label class="block mb-2 font-semibold">Nama Sumber</label>
        <input type="text" name="name" value="{{ $item->name }}"
            class="w-full px-3 py-2 border rounded mb-4">

        <label class="block mb-2 font-semibold">Kategori</label>
        <select name="category" class="w-full px-3 py-2 border rounded mb-4">
            @foreach ($categories as $category)
                <option value="{{ $category->category_name }}"
                    {{ $item->category == $category->category_name ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>

        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Update
        </button>

        <a href="{{ route('coa.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>

    </form>

@endsection
