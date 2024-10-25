<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name = null, $location = null)
    {
        //
        $data['restaurants'] = DB::table('stores')->where('country_id', 19)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
    }
    
    public function restaurantDetails($prettyName)
    {
        //
        $restaurant = DB::table('stores')->where('country_id', 19)->where('pretty_name', $prettyName)->where('active', 1)->first();
        if (isset($restaurant)) {
            $data['restaurant'] = $restaurant;
            $data['restaurantItems'] = DB::table('items')->where('store_id', $restaurant->id)->paginate(18);
            $data['pretty_name'] = $restaurant->name;
            return view('restaurant.details', $data);
        }
    }
    
    public function delivery()
    {
        //
        $data['restaurants'] = DB::table('stores')->where('country_id', 19)->where('delivery', 1)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
    }
    
    public function pickup()
    {
        // take away ON
        $data['restaurants'] = DB::table('stores')->where('country_id', 19)->where('take_away', 1)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
    }
    
    public function homeChef()
    {
        //
        $data['restaurants'] = DB::table('stores')->where('country_id', 19)->where('home_chef', 1)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
    }
    
    public function featured()
    {
        //
        $data['restaurants'] = DB::table('stores')->where('country_id', 19)->where('featured', 1)->where('active', 1)->paginate(18);
        return view('restaurant.index', $data);
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
