<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products']=Product::with('product_category')->get();
        $data['categories']=ProductCategory::get();
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['products']=Product::get();
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product;
        $product->name=$request->name;
        $product->product_category_id=$request->product_category_id;

        if ($request->file('images')) {
            $file = $request->file('images');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/product'), $filename);
            $product['images'] = $filename;
        }
        $product->item_cost=$request->item_cost;
        $product->mrp=$request->mrp;
         $product->description=$request->description;
         $product->price=$request->price;

         $product->save();
            return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $product=Product::find($id);
        //dd($data);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $product->name=$request->name;
        $product->product_category_id=$request->product_category_id;

        if ($request->file('images')) {
            $file = $request->file('images');
            //dd($request->file('image'));

            @unlink(public_path('upload/product/'.$data->images));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //dd($filename);
            $file->move(public_path('upload/product'), $filename);
            $product['images'] = $filename;
        }
        $product->item_cost=$request->item_cost;
        $product->mrp=$request->mrp;

        $product->description=$request->description;
        $product->price=$request->price;

        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $product=ProductCategory::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
