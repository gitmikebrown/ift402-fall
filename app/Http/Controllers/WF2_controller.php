<?php

namespace App\Http\Controllers;
use App\Models\WF2_model;
use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WF2_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cities = DB::table('restaurant')
                    ->where('city','=',request('city'))
                    ->get();
        
        //dd($cities);


        return view('wf2',[
            'restaurant_results' => $cities
            //'restaurant_results' => WF2_model::restaurant_results()
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
