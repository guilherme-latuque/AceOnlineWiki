<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GearController extends Controller
{
    public function index() {
        $gears = Gear::all();
        $total = Gear::all()->count();
        return view('list-gears', compact('gears', 'total'));
    }

    public function create() {
        return view('include-gear');
    }

    public function store(Request $request) {
        $gear = new Gear;
        $gear->name = $request->name;
        $gear->type = $request->type;
        $gear->save();
        return redirect()->route('gear.index')->with('message', 'Gear created successfully!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $gear = Gear::findOrFail($id);
        return view('alter-gear', compact('gear'));
    }

    public function update(Request $request, $id) {
        $gear = Gear::findOrFail($id); 
        $gear->name = $request->name;
        $gear->type = $request->type;
        $gear->save();
        return redirect()->route('gear.index')->with('message', 'Gear changed successfully!');
    }

    public function destroy($id) {
        $gear = Gear::findOrFail($id);
        $gear->delete();
        return redirect()->route('gear.index')->with('message', 'Gear deleted successfully!');
    }
}
