<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $products = Product::latest()->where('status',true)->get();
        $perPage = $request->query('per_page', 10);
        $products = Product::query()
            ->when($request->search, function($query, $search){
                $query->where(function($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->where('status', true)
            ->paginate($perPage);


        return response()->json([
            'success' => true,
            'count' => $products->count(),
            'data' => $products
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_id' => 'nullable',
            'name' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status'=> 'nullable|boolean'
        ]);
        $validate['status'] = $validate['status'] ?? true;
        $products = Product::create($validate);

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);

        if(!$products){
            return response()->json([
                'success'=> false,
                'message'=> 'product not found!',
                'data'=> []
            ]);
        }

        return response()->json([
            'success'=>true,
            'message'=> 'product found',
            'data'=> $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'category_id' => 'nullable|exists:categories,id',
            'name' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $products = Product::find($id);

        if(!$products){
            return response()->json([
                'success'=> false,
                'message'=> 'Product not found!',
                'data'=> []
            ]);
        }

        $products->update($validate);

        return response()->json([
            'success'=> true,
            'message'=> 'Product update success',
            'data'=> $products
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return response()->json([
            'success'=> true,
            'message'=> 'Product deleted'
        ],200);
    }
}
