<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function list() {
        // $posts = Post::all();
        $products = DB::table('products')->get();
        // echo $posts;
        return view('admin.home-management.product-info.list', ['products' => $products]);
    }

    public function add() {
        return view('admin.home-management.product-info.add');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'list' => 'required',
            ], [
                'list.required' => 'Product list field is required.',
            ]);
        
        // dd($validatedData['list']);

        foreach($validatedData['list'] as $list){
            $product = new Product();
            $product->list = $list;
            $product->save();
        }
        
        // return back()->with('success', 'Products created successfully.');
        return redirect()->route('admin.home-management.product-info.list')->with('success', 'Product created successfully.');
    }

    public function edit(Product $editData) {
        return view('admin.home-management.product-info.add', ['editData' => $editData]);
    }

    public function update($product, Request $request) {
        $product = Product::find($product);
        $product->list = $request->input('list');
        $product->update();

        $products = $product->all();
        // return view('admin.productlist', ['products' => $products]);
        return redirect()->route('admin.home-management.product-info.list')->with('success', 'Product updated successfully.');
    }

    public function destroy(Request $request) {
        $product = Product::find($request->id);     
        $deleted = $product->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
