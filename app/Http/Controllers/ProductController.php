<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $categories, $brands, $products, $product;
    public function addProduct()
    {
        $this->categories=Category::where('status',1)->get();
        $this->brands=Brand::where('status',1)->get();
        return view('admin.product.add-product',[
            'categories'=>$this->categories,
            'brands'=>$this->brands,
        ]);
    }
    public function newProduct(Request $request)
    {
        Product::createProduct($request);
        return redirect()->back()->with('success','Product created successfully');
    }

}
