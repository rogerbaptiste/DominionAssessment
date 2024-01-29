<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplies; // Import the Supply model

class SuppliesController extends Controller
{
    public function index()
    {
        $supplies = Supplies::all();
        return response()->json($supplies);
    }    

    public function show($id)
    {
        $supply = Supplies::findOrFail($id);
        return response()->json($supply);
    }
    

    public function store(Request $request)
    {
        $supply = Supplies::create($request->all());
        return response()->json($supply, 201);
    }
    
    public function update(Request $request, $id)
    {
        $supply = Supplies::findOrFail($id);
        $supply->update($request->all());
        return response()->json($supply, 200);
    }
    
    public function destroy($id)
    {
        $supply = Supplies::findOrFail($id);
        $supply->delete();
        return response()->json(['message' => 'Supply deleted successfully'], 200);
    }
    
}
