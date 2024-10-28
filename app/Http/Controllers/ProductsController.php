<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Products::all();
        $categories = Categories::all();
        $addons = Addon::all();
        return view('admin.product')->with([
            'products' => $products,
            'categories' => $categories,
            'addons' => $addons
        ]);
    }

    public function store(Request $request)
    {

        $categories = Categories::all();
        $validatedData = $request->validate([
            'product_name'    => 'required|string|max:255',
            'price'   => 'required|numeric',
            'stock'   => 'required|integer',
            'image'   => 'required|file|max:1024',
            'categories_id' => 'required|exists:categories,id'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('productsImage');
        }

        Products::create($validatedData);

        return redirect('/admin/product')->with('success', 'Data has been Updated');
    }
}
