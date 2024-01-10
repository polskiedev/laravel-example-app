<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FarmElementType;

class FarmElementTypeController extends Controller
{
    public function index() {
        $farm_element_types = FarmElementType::all();

        return view('farm_element_types.index', ['farm_element_types' => $farm_element_types]);
    }

    public function create() {
        return view('farm_element_types.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'element_type_name' => 'required|string|unique:farm_element_types'
        ]);

        $newData = FarmElementType::create($data);

        return redirect(route('farm_element_type.index'));
    }

    public function edit(FarmElementType $farm_element_type) {
        return view('farm_element_types.edit', ['farm_element_type' => $farm_element_type]);
    }

    public function update(FarmElementType $farm_element_type, Request $request) {
        $data = $request->validate([
            'element_type_name' => 'required|string|unique:farm_element_types,element_type_name,' . $farm_element_type->id
        ]);

        $farm_element_type->update($data);

        return redirect(route('farm_element_type.index'))->with('success', 'Farm Element Type Updated Successfully');
    }

    public function destroy(FarmElementType $farm_element_type) {
        $farm_element_type->delete();
        return redirect(route('farm_element_type.index'))->with('success', 'Farm Element Type Deleted Successfully');
    }
}
