<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Department;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dep= Department::all();
        $cat= Category::all();
        return view('Complaint.form', compact('dep','cat'));
        //
    }
    public function updateshow()
    {
        $ad= Complaint::all();
        $officers= User::where('RoleId',2);
        return view('Complaint.showAdmin',compact('ad','officers'));
      
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Email'=> 'required|Email',
            'Description' => 'required|max:1000',
            'ComplaintBy'=> 'required|string'
        ]);
        $store= new Complaint;
        $store->ComplaintBy=$request->ComplaintBy;
        $store->Email=$request->Email;
        $store->Title=$request->Title;
        $store->Description=$request->Description;
        $store->Status=$request->Status;
        $store->DepId=$request->Dep;
        $store->CategoryId=$request->Cat;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        $abc= Complaint::all();
        return view('Complaint.show',compact('abc'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Request $request){
        $dep=Department::all();
        $cat=Category::all();
        $officer=User::where('RoleId',2)->get();;
        $edit=Complaint::find($request->input('id'));
        if($edit){
          
            return view('complaint.update',compact('edit','dep','cat','officer'));

        }
        else{
            return redirect()->route('complaint.show');
        }
    }
    public function update(Request $request){
        $update=Complaint::find($request->id);
        if($update){
            
            $update->AssignedTo= $request->Assigned;
            $update->update();
            return redirect()->route('update.show');

        }
        else{
            return redirect()->route('update.show');
        }

    }
    public function destroy(Request $request)
    {
        $id=$request->id;
        if($id){
            Complaint::destroy($id);
            return redirect()->route('complaint.show');
        }
        else{
             return redirect()->route('complaint.show');
        }
    }

    public function offedit(Request $request){
        $offedit= Complaint::find($request->id);
        if($offedit){
            return view('Complaint.officerupdate',compact('offedit'));
        }

        else {
            return redirect()->back();
        }


    }

    public function offupdate(Request $request){
        $offupdate=Complaint::find($request->id);
        if($offupdate){
            $offupdate->Status=$request->Status;
            $offupdate->save();
            return redirect()->route('officer.dashboard');

        }

        else{
             return redirect()->route('update.show');


        }
    }
}
