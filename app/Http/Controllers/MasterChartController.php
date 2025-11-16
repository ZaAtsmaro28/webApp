<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterChart $masterChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterChart $masterChart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MasterChart $masterChart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterChart $masterChart)
    {
        //
    }
}
