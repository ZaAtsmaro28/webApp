@extends('layouts.app')

@section('content')

    <form action="{{ route('transaction.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <label class="block mb-2 font-semibold">Tanggal</label>
        <input 
            type="date" 
            name="date" 
            class="border p-2 rounded py-2 mb-4"
            value="{{ old('tanggal') }}"
        />


        <label class="block mb-2 font-semibold">Jenis Sumber COA</label>
        <select name="coa" id="coa" class="w-full px-3 py-2 border rounded mb-4">
            @foreach ($items as $item)
                <option 
                    value="{{ $item->coa_code }}"
                    data-type="{{ $item->category->type }}" 
                >
                    {{ $item->coa_code }} - {{ $item->name }}
                </option>
            @endforeach
        </select>


        <label class="block mb-2 font-semibold">Deskripsi</label>
        <input type="text" name="desc" 
               class="w-full px-3 py-2 border rounded mb-4">

        <label class="block mb-2 font-semibold">Debit</label>
        <input type="text" name="debit" id="debit"
               class="w-full px-3 py-2 border rounded mb-4 disabled:bg-gray-200 disabled:text-gray-500">

        <label class="block mb-2 font-semibold">Kredit</label>
        <input type="text" name="credit" id="credit"
               class="w-full px-3 py-2 border rounded mb-4 disabled:bg-gray-200 disabled:text-gray-500">

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Simpan
        </button>

        <a href="{{ route('transaction.index') }}" 
           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 ml-2">
           Batal
        </a>
    </form>

    <script>
        const coaSelect = document.getElementById('coa');
        const debitInput = document.getElementById('debit');
        const creditInput = document.getElementById('credit');

        function updateFields() {
            const selectedOption = coaSelect.options[coaSelect.selectedIndex];
            const type = selectedOption.dataset.type; 

            if (type === "income") {
                debitInput.disabled = true;
                creditInput.disabled = false;

                debitInput.value = "";  
            } else if (type === "expense") {
                creditInput.disabled = true;
                debitInput.disabled = false;

                creditInput.value = "";
            }
        }

        updateFields();

        coaSelect.addEventListener("change", updateFields);
    </script>


@endsection
