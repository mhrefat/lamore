<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;
use Carbon\carbon;


class BrandController extends Controller
{
    
    public function showForm()
    {
        $brands = Brand::all();
        return view('brand.form',compact('brands'));
    }
    
    public function storeForm(Request $request)
    {
        $request->validate([
              'name'=>'required',
              'description'=>'required',
              'image'=>'required',
              'status'=>'required',
              'url'=>'required',
        ]);

        $brands = new Brand();
        $brands->name = $request->name;
        $brands->description = $request->description;
        $brands->image = $request->image;
        $brands->status = $request->status;
        $brands->url = $request->url;
        $brands->created_at = Carbon::now();
        $brands->save();

        return back()->with('message','Brand Added Successfully.');
    }

   public function deleteBrand($id)
   {
       Brand::find($id)->delete();
       return redirect()->back()->with('message','Brand Deleted Successfully');
   }

   public function updateBrand(Request $request,$id)
   {
             $request->validate([
                  'name'=>'required',
                  'description'=>'required',
                  'image'=>'required',
                  'status'=>'required',
                  'url'=>'required',
             ]);

      $brands = Brand::find($id);
      $brands->name = $request->name;
      $brands->description = $request->description;
      $brands->image = $request->image;
      $brands->status = $request->status;
      $brands->url = $request->url;
      $brands->created_at = Carbon::now();
      $brands->save();

      return back()->with('message','Brand updated Successfully.');   
   }




}