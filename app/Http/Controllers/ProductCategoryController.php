<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories']=ProductCategory::get();
        return view('admin.product_category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=new ProductCategory;
        $category->name=$request->name;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/product_category'), $filename);
            $category['image'] = $filename;
        }
        $category->parent_id=$request->parent_id;
        $category->discount=$request->discount;
        $category->save();
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $categories=ProductCategory::get();
        $category=ProductCategory::find($id);

        // dd($question);
        // return view('admin.product_category.edit',compact('category'));
        $htmlView = view('admin.product_category.edit',compact('category','categories'))->render();
        return response()->json(
            ['status' => 200,
                'htmlData' => $htmlView,
            ]
        );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $category= ProductCategory::find($id);
        $category->name=$request->name;
        if ($request->file('image')) {
            $file = $request->file('image');
            //dd($request->file('image'));

            @unlink(public_path('upload/product_category/'.$data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //dd($filename);
            $file->move(public_path('upload/product_category'), $filename);
            $category['image'] = $filename;
        }
        $category->parent_id=$request->parent_id;
        $category->discount=$request->discount;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category=ProductCategory::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
