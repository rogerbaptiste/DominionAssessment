<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;



class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response()->json($product, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            // Add validation rules for other fields
        ]);

        $product = Product::create($request->all());
        return response()->json($product, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product, Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string',
            // Add validation rules for other fields
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
