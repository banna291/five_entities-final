<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Role.form');
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
            'Name'=> 'required|string'
        ]);
        $store= new Role;
        $store->Name=$request->Name;
        $store->save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $role=Role::all();
        return view('Role.show',compact('role'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Request $request){
        $edit=Role::find($request->input('id'));
        if($edit){
            return view('Role.update',compact('edit'));

        }
        else{
            return redirect()->route('role.show');
        }
    }
    public function update(Request $request){
        $update=Role::find($request->id);
        if($update){
            $update->Name=$request->Name;
           
            $update->update();
            return redirect()->route('role.show');

        }
        else{
            return redirect()->route('role.show');
        }

    }
    public function destroy(Request $request)
    {
        $id=$request->id;
        if($id){
            Role::destroy($id);
            return redirect()->route('role.show');
        }
        else{
             return redirect()->route('role.show');
        }
    }
}
