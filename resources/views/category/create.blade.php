@extends('layouts.app')

@section('title', 'Data Posts')
@section('heading', 'Data Posts')

@section('content')

<x-layouts.app :title="'Tambah Post'">

    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <label class="block mb-2 font-semibold">Judul</label>
        <input type="text" name="judul" 
               class="w-full px-3 py-2 border rounded mb-4">

        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Simpan
        </button>

        <a href="{{ route('posts.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>
    </form>

@endsection
