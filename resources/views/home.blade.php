@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <div class="bg-white shadow rounded p-6">
        <h2 class="text-xl font-bold mb-4">Data Tabel Transaksi(Contoh)</h2>

        <table class="min-w-full border border-gray-300 text-sm">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-3 border">Kolom 1</th>
                    <th class="p-3 border">Kolom 2</th>
                    <th class="p-3 border">Kolom 3</th>
                    <th class="p-3 border">Kolom 4</th>
                    <th class="p-3 border">Kolom 5</th>
                    <th class="p-3 border">Kolom 6</th>
                </tr>
            </thead>

            <tbody>
                {{-- ROW 1 --}}
                <tr>
                    <td class="p-3 border">Isi 1A</td>
                    <td class="p-3 border">Isi 1B</td>
                    <td class="p-3 border">Isi 1C</td>
                    <td class="p-3 border">Isi 1D</td>
                    <td class="p-3 border">Isi 1E</td>
                    <td class="p-3 border">Isi 1F</td>
                </tr>

                {{-- ROW 2 --}}
                <tr class="bg-gray-50">
                    <td class="p-3 border">Isi 2A</td>
                    <td class="p-3 border">Isi 2B</td>
                    <td class="p-3 border">Isi 2C</td>
                    <td class="p-3 border">Isi 2D</td>
                    <td class="p-3 border">Isi 2E</td>
                    <td class="p-3 border">Isi 2F</td>
                </tr>

                {{-- ROW 3 --}}
                <tr>
                    <td class="p-3 border">Isi 3A</td>
                    <td class="p-3 border">Isi 3B</td>
                    <td class="p-3 border">Isi 3C</td>
                    <td class="p-3 border">Isi 3D</td>
                    <td class="p-3 border">Isi 3E</td>
                    <td class="p-3 border">Isi 3F</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
