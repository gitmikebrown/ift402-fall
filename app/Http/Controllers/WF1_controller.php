<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use App\Models\WF1_model;
use App\Models\cuisine;
use App\Models\restaurant;
use Illuminate\Http\Request;


class WF1_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cuisine = DB::table('cuisine')
                    ->select('name')
                    ->distinct()
                    ->get();

        $cities = DB::table('restaurant')
                    ->select('city')
                    ->distinct()
                    ->get();
       
       
        //dd($cities);
        //dd($cuisine);
        return view('wf1', [
            'cuisines' => $cuisine,
            'cities' => $cities
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
