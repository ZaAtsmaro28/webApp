<?php

namespace App\Http\Controllers;

use App\Models\MasterChart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('masterChart')->get();

        return view('transaction.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = MasterChart::all();
        return view('transaction.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Transaction::create([
            'date' => $request->date,
            'coa_code' => $request->coa,
            'desc' => $request->desc,
            'debit' => $request->debit,
            'credit' => $request->credit,
        ]);

        return redirect()
            ->route('transaction.index')
            ->with('success', 'added 1 new row data to transaction table');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::with('masterChart')->find($id);

        $items = MasterChart::all();

        return view('transaction.edit', compact('transaction', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $transaction = Transaction::find($id);

        $transaction->update([
            'date' => $request->date,
            'coa_code' => $request->coa,
            'desc' => $request->desc,
            'debit' => $request->debit,
            'credit' => $request->credit,
        ]);

        return redirect()
            ->route('transaction.index')
            ->with('success', '1 row updated from transaction table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();

        return redirect()
            ->route('transaction.index')
            ->with('success', '1 row deleted from transaction table');
    }
}
