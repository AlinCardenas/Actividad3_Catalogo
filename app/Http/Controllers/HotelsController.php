<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Service;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::orderByDesc('id')->paginate(12);
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $object = new Hotel();
        $list= Service::pluck('name','id');
        $listados= Address::pluck('street','id');
        
        

        return view('hotels.create', compact('object','list','listados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name_img=[];
        $route_logo = $request->logo->store('public/img');
        
        $hotel= new Hotel();

        // genera el nombre de la imagen y las guarda
        foreach ($request->file('image') as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/img', $filename);
            $name_img[] = $path;
        }

        $hotel->name =$request->name;
        $hotel->price =$request->price;
        $hotel->address =$request->address;
        $hotel->ranking =$request->ranking;
        $hotel->description =$request->description;
        $hotel->logo = $route_logo;
        $hotel->image = json_encode($name_img);
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
        $object = new Hotel();
        $list= Destination::pluck('name','id');

        
        return view('hotels.edit',compact('hotel','object','list'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $name_img=[];
        $route_logo = $request->logo->store('public/img');
        
        $hotel= new Hotel();

        // genera el nombre de la imagen y las guarda
        foreach ($request->file('image') as $file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/img', $filename);
            $name_img[] = $path;
        }

        $hotel->name =$request->name;
        $hotel->price =$request->price;
        $hotel->address =$request->address;
        $hotel->ranking =$request->ranking;
        $hotel->description =$request->description;
        $hotel->logo = $route_logo;
        $hotel->image =json_encode($name_img);
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

  /*   public function skip($id){
        $skip=($id+1);
        $hotel=Hotel::find($skip);
        

        if ($hotel) {
            
            return view('hotels.show',compact('hotel'));
        } else {
            do{
                $skip=($skip+1);
                $hotel=Hotel::find($skip);
            }
            while($hotel);
           // $hotel=Hotel::first();
            return view('hotels.show',compact('hotel'));
        }
    }

    public function back($id){
        $back=($id-1);
        $hotel=Hotel::find($back);
        if ($hotel) {
            return view('hotels.show',compact('hotel'));
        } else {
            $hotel= Hotel::latest();
            return view('hotels.show',compact('hotel'));
        }
    } */
}
