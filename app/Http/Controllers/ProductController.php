<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function productlist()
    {
        
        $products = Product::all();
        $categories= Category::all();
        $brands= Brand::all();
        return view('product.form',compact('products','categories','brands'));
    }
    public function store(Request $request){
        
        $validData = $request->validate([

            'barcode'=>'required',
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'price'=>'required',
            'warranty'=>'required',
            'sku'=>'required',
            'weight'=>'required',
            'code'=>'required',
            
            
        ],
        
    );
    
    $products = new Product();
    $products->barcode = $request->barcode;
    $products->title =  $request->title;
    $products->category_id = $request->category_id;
    $products->brand_id = $request->brand_id;
    $products->price = $request->price;
    $products->warranty = $request->warranty;
    $products->sku = $request->sku;
    $products->weight = $request->weight;
    $products->code = $request->code;
    //dd($request->all());
    $products->save();
        
        
   
    return redirect()->back()->with('message','Suucessfully Added!');
    }

    public function productupdate(Request $request,$id){
        $ValidateData= $request->validate([
            'barcode'=>'required',
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'price'=>'required',
            'warranty'=>'required',
            'sku'=>'required',
            'weight'=>'required',
            'code'=>'required',
        ]);
    
    $products=Product::find($id);
   
    //$products->barcode = $request->barcode;
    
    $products->title =$request->title;
    $products->category_id =$request->category_id;
    $products->brand_id = $request->brand_id;
    $products->price = $request->price;
    $products->warranty = $request->warranty;
    $products->sku = $request->sku;
    $products->weight = $request->weight;
    $products->code = $request->code;
    //dd($request->all());
    $products->save();

    return redirect()->back();

    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
}

