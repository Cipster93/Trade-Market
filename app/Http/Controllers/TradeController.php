<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;


class TradeController extends Controller
{
    public function home() {

        $sellers = Seller::with('products')->get();

        return view('home', compact('sellers'));

    }

    public function create() {

        return view('create');

    }

    public function store(Request $request) {

         $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0.01',
        ]);


        $seller = Auth::user(); 

        $product = Product::firstOrCreate([
            'product_name' => $validated['product_name'],
        ]);

        $seller->products()->attach($product->id, ['price' => $validated['price']]);

        return redirect('/');
    }

    public function search(Request $request) {

        $query = $request->input('query');

        $sellers = Seller::whereHas('products', function($q) use ($query) {
            $q->where('product_name', 'like', '%' . $query . '%');
        })->with(['products' => function($q) use ($query) {
            $q->where('product_name', 'like', '%' . $query . '%');
        }])->get();
    
        return view('home', compact('sellers'));
    }
}
