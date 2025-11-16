<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MasterChart;
use Illuminate\Http\Request;

class MasterChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = MasterChart::all();

        return view('coa.index',[
            'title'=>'Chart Of Account',
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('coa.create', 
        [
            "title" => "Form Tambah Data Sumber",
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'coa_code' => 'required|numeric|digits:3',
            'name' => 'required|string|max:255'
        ]);

        MasterChart::create([
            'coa_code' => $request->coa_code,
            'name' => $request->name,
            'category' => $request->category
        ]);

        return redirect()
            ->route('coa.index')
            ->with('success', 'new data row at coa table has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $coa_code)
    {
        $categories = Category::all();
        $item = MasterChart::find($coa_code);

        return view('coa.edit', compact('categories', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $coa_code)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $item = MasterChart::find($coa_code);

        $item->update([
            'name' => $request->name,
            'category' => $request->category
        ]);

        return redirect()
            ->route('coa.index')
            ->with('success', '1 data row updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $coa_code)
    {
        $item = MasterChart::find($coa_code);

        $item->delete();

        return redirect()
            ->route('coa.index')
            ->with('success', '1 item deleted from masterChart/coa table');
    }
}
