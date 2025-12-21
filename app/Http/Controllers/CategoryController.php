<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Category.form');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255' 
        ]);
        $store= new Category;
        $store->Name=$request->Name;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $item=Category::all();
        return view('Category.show',compact('item'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Request $request){
        $edit=Category::find($request->input('id'));
        if($edit){
            return view('Category.update',compact('edit'));

        }
        else{
            return redirect()->route('Category.show');
        }
    }
    public function update(Request $request){
        $update=Category::find($request->id);
        if($update){
            $update->Name=$request->Name;
           
            $update->update();
            return redirect()->route('category.show');

        }
        else{
            return redirect()->route('category.show');
        }

    }
    public function destroy(Request $request)
    {
        $id=$request->id;
        if($id){
            Category::destroy($id);
            return redirect()->route('category.show');
        }
        else{
             return redirect()->route('category.show');
        }
    }
}
