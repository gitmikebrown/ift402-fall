<?php

namespace App\Http\Controllers;
use App\Models\WF6_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WF6_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $menuItems = DB::table('item')
                    ->where('restaurant_ID','=',request('restaurant'))
                    //->where('menu_ID','=',request('menu'))
                    ->distinct()
                    ->get();

        $resturantInfo = DB::table('restaurant')
                    ->where('restaurantID','=',request('restaurant'))
                    ->get();
        
        //dd($resturantInfo);
        //dd();
        //return $menuItems;
        
        return view('wf6',[
            'resturant' => $resturantInfo,
            'menu_items' => $menuItems
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
