<?php

namespace App\Http\Controllers\Admin\HomeManagement;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function list() {
        // $posts = Post::all();
        $stocks = DB::table('stocks')->get();
        // echo $posts;
        return view('admin.home-management.stock-info.list', ['stocks' => $stocks]);
    }

    public function add() {
        return view('admin.home-management.stock-info.add');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'list' => 'required',
            ], [
                'list.required' => 'Stock list field is required.',
            ]);
        
        // dd($validatedData['list']);

        foreach($validatedData['list'] as $list){
            $stock = new Stock();
            $stock->list = $list;
            $stock->save();
        }
        
        // return back()->with('success', 'Stocks created successfully.');
        return redirect()->route('admin.home-management.stock-info.list')->with('success', 'Stock created successfully.');
    }

    public function edit(Stock $editData) {
        return view('admin.home-management.stock-info.add', ['editData' => $editData]);
    }

    public function update($stock, Request $request) {
        $stock = Stock::find($stock);
        $stock->list = $request->input('list');
        $stock->update();

        $stocks = $stock->all();
        // return view('admin.stocklist', ['stocks' => $stocks]);
        return redirect()->route('admin.home-management.stock-info.list')->with('success', 'Stock updated successfully.');
    }

    public function destroy(Request $request) {
        $stock = Stock::find($request->id);     
        $deleted = $stock->delete();
        if($deleted){
            return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        }else{
            return response()->json(['status'=>'error','message'=>'Sorry something wrong']);
        }
    }
}
