<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function show()
    {
        return response()->json(Products::all());
    }

    public function show_id($id)
    {
        $product = Products::find($id);
            if ($product) {
                return response()->json($product);
            } else {
                return response()->json(['message' => 'Product not found'], 404);
            }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $product = Products::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
        ]);

        // Find the product by ID
        $product = Products::find($id);

        if ($product) {
            // Update the product with the new data
            $product->update($request->all());

            // Return the updated product with a 200 status code
            return response()->json($product, 200);
        } else {
            // Return an error response with a 404 status code
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
