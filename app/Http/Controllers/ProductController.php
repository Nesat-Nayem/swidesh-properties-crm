<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('crm.product.index', compact('products'));
    }

    public function create()
    {
        return view('crm.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'rate' => 'required|numeric',
            'unit' => 'required',
            'category' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('crm.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('crm.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'description' => 'required',
            'rate' => 'required|numeric',
            'unit' => 'required',
            'category' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
