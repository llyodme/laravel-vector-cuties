<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $inventory = Inventory::all();
        return view('pages.inventory', compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.add-item-inventory');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'inv_itemname' => 'required',
            'inv_date' => 'required',
            'inv_quantity' => 'required',
            'inv_exp_date' => 'required',
            'inv_description' => 'required'
        ]);
        $inventory = Inventory::create($storeData);

        return redirect('/inventory')->with('success', 'Inventory created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('pages.edit-inventory', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'inv_itemname' => 'required',
            'inv_date' => 'required',
            'inv_quantity' => 'required',
            'inv_exp_date' => 'required',
            'inv_description' => 'required'
        ]);
        $inventory->update($request->all());
        
        return redirect('/inventory')->with('success', 'Inventory updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect('/inventory')->with('success', 'Inventory deleted successfully');
    }
}
