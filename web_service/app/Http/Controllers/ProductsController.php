<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function viewProducts(){
        try {
            $products = Products::all();
            return response()->json($products, 200); // 200 OK
        } catch (\Exception $e) {
            Log::error('Failed to retrieve products: ', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Failed to retrieve products', 'error' => $e->getMessage()], 500); // 500 Internal Server Error
        }
    }

    public function addProduct(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        try {
            $product = new Products;
            $product->name = $validatedData['name'];
            $product->price = $validatedData['price'];
            $product->save();

            return response()->json($product, 201); // 201 Created
        } catch (\Exception $e) {
            Log::error('Failed to add product: ', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Failed to add product', 'error' => $e->getMessage()], 500); // 500 Internal Server Error
        }
    }
}
