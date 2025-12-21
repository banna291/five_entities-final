<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Department.form');
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
            'Name'=> 'required|string'
        ]);
        $store=new Department;
        $store->Name=$request->Name;
        $store->save();
        return redirect()->back();        //
    }

    /**
     * Display the specified resource.
     */
      public function show( Department $department)
    {
        $item= Department::all();
        return view(' Department.show',compact('item'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Request $request){
        $edit= Department::find($request->input('id'));
        if($edit){
            return view(' department.update',compact('edit'));

        }
        else{
            return redirect()->route('department.show');
        }
    }
    public function update(Request $request){
        $update= Department::find($request->id);
        if($update){
            $update->Name=$request->Name;
           
            $update->update();
            return redirect()->route('department.show');

        }
        else{
            return redirect()->route('department.show');
        }

    }
    public function destroy(Request $request)
    {
        $id=$request->id;
        if($id){
             Department::destroy($id);
            return redirect()->route('department.show');
        }
        else{
             return redirect()->route('department.show');
        }
    }
   
}
