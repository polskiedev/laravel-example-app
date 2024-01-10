<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FarmElement;
use App\Models\FarmElementType;

class FarmElementController extends Controller
{
    public function index() {
        $farm_elements = FarmElement::all();
        return view('farm_elements.index', ['farm_elements' => $farm_elements]);
    }

    public function create() {
        $farm_element_types = FarmElementType::all();
        return view('farm_elements.create', ['farm_element_types' => $farm_element_types]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'element_name' => 'required|string|unique:farm_elements',
            'type_id' => 'required|exists:farm_element_types,id',
            'variant' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $newData = FarmElement::create($data);

        return redirect(route('farm_element.index'))->with('success', 'Farm Element Added Successfully');

    }

    public function edit(FarmElement $farm_element) {
        $farm_element_types = FarmElementType::all();
        return view('farm_elements.edit', ['farm_element' => $farm_element, 'farm_element_types' => $farm_element_types]);
    }

    public function update(FarmElement $farm_element, Request $request) {
        $data = $request->validate([
            'element_name' => 'required|string|unique:farm_elements,element_name,' . $farm_element->id,
            'type_id' => 'required|exists:farm_element_types,id',
            'variant' => 'nullable|string',
            'description' => 'nullable|string'
        ]);


        $farm_element->update($data);

        return redirect(route('farm_element.index'))->with('success', 'Farm Element Updated Successfully');
    }

    public function destroy(FarmElementType $farm_element_type) {
        $farm_element_type->delete();
        return redirect(route('farm_element_type.index'))->with('success', 'Farm Element Type Deleted Successfully');
    }
}
