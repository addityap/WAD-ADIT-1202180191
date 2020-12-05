<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function order()
    {
        $products = Product::all();
        return view('order', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.input_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();
        $data = new Product;
        $data->Name = $request->namaP;
        $data->price = $request->harga;
        $data->description = $request->deskripsi;
        $data->stock = $request->stock;
        $data->img_path = $namaFile;

        $nm->move(public_path() . '/img', $namaFile);
        $data->save();

        return redirect()->to('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('proses_order', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // return($product);
        return view('edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Product::where('id', $product->id)
            ->update([

                'Name' => $request->namaP,
                'price' => $request->harga,
                'description' => $request->deskripsi,
                'stock' => $request->stock,
                'img_path' => $request->gambar
            ]);
        return redirect()->to('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->to('/product');
    }
    public function __construct()
    {
        $this->Order = new Order();
    }
    public function tampil()
    {
        //
        $data = [
            'order' => $this->Order->allData(),
        ];
        return view('history', $data);
    }



    public function store2(Request $request)
    {
        $data = new Order;
        $data->buyer_name = $request->name;
        $data->buyer_contact = $request->contact;
        $data->amount = $request->amount;

        $data->save();

        return redirect()->to('/order/index');
    }
}
