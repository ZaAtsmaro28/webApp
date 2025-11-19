@extends('layouts.app')

@section('content')

    {{-- <form action="{{ route('coa.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <label class="block mb-2 font-semibold">Kode COA</label>
        <input type="text" name="coa_code" 
               class="w-full px-3 py-2 border rounded mb-4">
        
        @error('coa_code_error_message')
            <div class="text-red-500">{{ $message }}</div>
        @enderror


        <label class="block mb-2 font-semibold">Nama Sumber</label>
        <input type="text" name="name" 
               class="w-full px-3 py-2 border rounded mb-4">

        <label class="block mb-2 font-semibold">Kategori</label>
        <select name="category" class="w-full px-3 py-2 border rounded mb-4">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
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

        
    </form> --}}

    <form action="{{ route('coa.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf

    <label class="block mb-2 font-semibold">Kode COA</label>
    <input type="text" name="coa_code" 
           id="coa_code"
           class="w-full px-3 py-2 border rounded mb-4">
    
    @error('coa_code_error_message')
        <div class="text-red-500">{{ $message }}</div>
    @enderror


    <label class="block mb-2 font-semibold">Nama Sumber</label>
    <input type="text" name="name" 
           class="w-full px-3 py-2 border rounded mb-4">

    <label class="block mb-2 font-semibold">Kategori</label>
    <select name="category" id="category" class="w-full px-3 py-2 border rounded mb-4">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
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
<script>
    const coaInput = document.getElementById("coa_code");
    const categorySelect = document.getElementById("category");

    const originalOptions = Array.from(categorySelect.options);

    coaInput.addEventListener("input", function () {
        const value = this.value.trim();

        categorySelect.innerHTML = "";

        let filteredOptions;

        if (value.startsWith("4")) {
            const allowed = ["1", "2"]; 

            filteredOptions = originalOptions.filter(opt =>
                allowed.includes(opt.value)
            );
        } 
        else {
            filteredOptions = originalOptions;
        }

        filteredOptions.forEach(opt => categorySelect.appendChild(opt));
    });
</script>
    

@endsection
