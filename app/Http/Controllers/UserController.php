<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Models\Role;
Use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $role= Role::all();
        return view('User.form',compact('role'));
        //
    }

    public function home(){
        return view('User.home');
    }

    public function admin(){
        if(session()->has('id')){
            $user=User::find(session('id'));
            if($user && $user->RoleId == 1){
                 return view('User.admin');

            }
            else{
                return redircet()->route('user.login');
            }
        }
         return redirect()->route('user.login');
      
    }

    public function officerdashboard(){
        

    // $userId = session('id');
    // $user = User::find($userId);

    // Now you can fetch data assigned to this user, e.g. complaints
    if(session()->has('id')){
            $user=User::find(session('id'));
            if($user && $user->RoleId == 2){
                 
            $complaints = Complaint::where('AssignedTo', session('id'))->get();

             return view('User.officer', compact( 'complaints'));
            }

            else{
                return redirect()->route('user.login');
            }
            return redirect()->route('user.login');
    }


}
    // public function customer(){
    //     return view('User.customer');
    // }

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
            'Name'=> 'required|string',
            'Email'=> 'required|Email|unique:users,Email',
            'Password'=> 'required|min:5'
        ]);
        $store= new User;
        $store->Email=$request->Email;
        $store->Password=Hash::make($request->Password);
        $store->RoleId= $request->choose;
        $store->Name=$request->Name;
        $store->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $list=User::all();
        return view('User.show',compact('list'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request){
        $edit=User::find($request->input('id'));
        if($edit){
            return view('User.update',compact('edit'));

        }
        else{
            return redirect()->route('user.show');
        }
    }
    public function update(Request $request){
        $update=User::find($request->id);
        if($update){
            $request->validate([
                'Email'=> 'required|Email'
            ]);
            $update->Email=$request->Email;
            $update->Password=$request->Password;
            $update->update();
            return redirect()->route('user.show');

        }
        else{
            return redirect()->route('user.show');
        }

    }
    public function destroy(Request $request)
    {
        $id=$request->id;
        if($id){
            User::destroy($id);
            return redirect()->route('user.show');
        }
        else{
             return redirect()->route('user.show');
        }
    }

    public function login(){
        return view('User.login');

    }
    public function logincheck(Request $request){
        $exist= User::where('Email',$request->Email)->first();
        if($exist){
            if(hash::check($request->Password,$exist->Password)){
                // session(['id' => $exist->id]);
                // session(['RoleId' => $exist->id]);
                $request->session()->put('id',$exist->id);


                if($exist->RoleId==1){
                      return redirect()->route('admin.dashboard');
                    
                }
                elseif($exist->RoleId==2){
                    return redirect()->route('officer.dashboard');
                }

                else{
                    return redirect()->route('user.login');
                }


            }
            else{
                    return redirect()->route('user.login');
                
            }
        }
        else{
                    return redirect()->route('user.login');

        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('user.login');

    }

 

    
}