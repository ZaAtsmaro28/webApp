<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', config('web-app-report'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bg-gray-100 p-6">
        @php
            $categories = collect($data[0])->keys()->filter(fn($k) => $k !== 'month');

            $labels = [
                'salary' => 'Salary',
                'other_income' => 'Other Income',
                'total_income' => 'Total Income',
                'family_expense' => 'Family Expense',
                'transport_expense' => 'Transport Expense',
                'meal_expense' => 'Meal Expense',
                'total_expense' => 'Total Expense',
                'net_income' => 'Net Income',
            ];

        @endphp


        <div class="overflow-x-auto mt-6">
            <table class="min-w-full border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-200 text-black font-bold">
                        <th class="border border-gray-400 px-4 py-2 text-left">Category</th>

                        @foreach ($data as $item)
                            <th class="border border-gray-400 px-4 py-2 text-center">
                                {{ $item['month'] }} <br>
                                <span class="font-normal">Amount</span>
                            </th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>

                    {{-- Loop semua kategori otomatis --}}
                    @foreach ($categories as $cat)
                        <tr class="{{ $bgColor[$cat] ?? 'bg-gray-50' }}">
                            <td class="border border-gray-300 px-4 py-2 font-semibold">
                                {{ $labels[$cat] ?? ucwords(str_replace('_', ' ', $cat)) }}
                            </td>

                            @foreach ($data as $item)
                                <td class="border border-gray-300 px-4 py-2 text-right">
                                    {{ number_format($item[$cat]) }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </body>
</html>
