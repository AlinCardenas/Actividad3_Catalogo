<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = address::all();
        return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = address::all('id');
        return view('addresses.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        address::create($input);
        return redirect('addresses')->with('message','Se ha creado correctamente el campo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $address = address::find($id);
        return view('addresses.show')->with('addresses',$address);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $addresses = address::all('id','state');
        $addresses = address::findOrFail($id); 
        return view('addresses.edit', compact('addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $address = address::findOrFail($id);
        $input=$request->all();
        $address->update($input);
        return redirect('addresses')->with('info','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = address::findOrFail($id);
        $address->delete();
        return redirect('addresses')->with('danger','se elimino correctamente el registro');
    }
}
