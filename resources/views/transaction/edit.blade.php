@extends('layouts.app')

@section('content')
    <form action="{{ route('transaction.update', $transaction->id) }}" 
        method="POST" 
        class="bg-white p-6 rounded shadow">

        @csrf
        @method('PUT')

        <label class="block mb-2 font-semibold">Tanggal</label>
        <input 
            type="date" 
            name="date" 
            class="border p-2 rounded py-2 mb-4"
            value="{{ $transaction->date }}"
        />


        <label class="block mb-2 font-semibold">Jenis Sumber COA</label>
        <select name="coa" class="w-full px-3 py-2 border rounded mb-4">
            @foreach ($items as $item)
                @php
                    
                    $optionValue = $item->coa_code . '|' . $item->name;

                    $selectedValue = $transaction->coa_code . '|' . $transaction->coa_name;
                @endphp

                <option value="{{ $optionValue }}"
                    {{ $optionValue === $selectedValue ? 'selected' : '' }}>
                    {{ $item->coa_code }} - {{ $item->name }}
                </option>
            @endforeach
        </select>


        <label class="block mb-2 font-semibold">Deskripsi</label>
        <input type="text" name="desc" 
               class="w-full px-3 py-2 border rounded mb-4"
               value="{{$transaction->desc}}">

        <label class="block mb-2 font-semibold">Debit</label>
        <input type="text" name="debit" 
               class="w-full px-3 py-2 border rounded mb-4"
               value="{{$transaction->debit}}">

        <label class="block mb-2 font-semibold">Kredit</label>
        <input type="text" name="credit" 
               class="w-full px-3 py-2 border rounded mb-4"
               value="{{$transaction->credit}}">

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Simpan
        </button>

        <a href="{{ route('transaction.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>
    </form>

@endsection
