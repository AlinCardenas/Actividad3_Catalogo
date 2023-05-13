<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::orderByDesc('id')->paginate(5);
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $route_logo = $request->logo->store('public/img');
        $route_image = $request->image->store('public/img');

        $hotel= new Hotel();
        $hotel->name =$request->name;
        $hotel->price =$request->price;
        $hotel->address =$request->address;
        $hotel->ranking =$request->ranking;
        $hotel->description =$request->description;
        $hotel->logo = $route_logo;
        $hotel->image =$route_image;
        $hotel->destino_id =$request->destino_id;
        $hotel->save();
        return redirect()->route('hotels.show',compact('hotel'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        return view('hotels.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Hotel $hotel)
    {
        // SHOW TRAE TOODO EL OBJETO
        return view('hotels.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel= new Hotel();
        $hotel->name =$request->name;
        $hotel->price =$request->price;
        $hotel->address =$request->address;
        $hotel->ranking =$request->ranking;
        $hotel->description =$request->description;
        $hotel->logo =$request->logo;
        $hotel->image =$request->image;
        $hotel->destino_id =$request->destino_id;
        $hotel->save();
        return redirect()->route('hotels.show',compact('hotel'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hotel)
    {
        // SOLO CON EL ID PUEDO BRRAR TODO
        $hotel= Hotel::find($hotel)->delete();
        return redirect()->route('hotels.index');
    }
}
