<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddEmploye;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $output['employe']=AddEmploye::orderBy('id','DESC')->paginate(7);
        return view('employe.index',$output);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employe.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'department'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'address'=>'required',
            'salary_type'=>'required',
            'amount'=>'required',
            'password'=>'required'
        ]);
                                            
        $user = new AddEmploye;
        $user->department =$request->department;
        $user->firstname = $request->firstname;
        $user->lastname =$request->lastname;
        $user->email=$request->email;
        $user->phoneno =$request->phoneno;                                                                                           
        $user->address=$request->address;
        $user->	salary_type=$request->salary_type;
        $user->amount=$request->amount;
        $user->password=$request->password;

       // print_r($user);die;
        $user->save();
        return redirect()->route('employe.index')
        ->with('success','user added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AddEmploye $user)
    {
        return view('employe.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $user = AddEmploye::find($id);

        return view('employe.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate
        ([
            'department'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phoneno'=>'required',
            'address'=>'required',
            'salary_type'=>'required',
            'amount'=>'required',
            'password'=>'required'
        ]);

        $user = AddEmploye::find($id);
  
        $user->department =$request->department;
        $user->firstname = $request->firstname;
        $user->lastname =$request->lastname;
        $user->email=$request->email;
        $user->phoneno =$request->phoneno;
        $user->address=$request->address;
        $user->salary_type=$request->salary_type;
        $user->amount=$request->amount;
        $user->password=$request->password;
        
       // print_r($user);die;
       
        $user->update();
  
        return redirect()->route('employe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AddEmploye::find($id); 
        $user->delete();
        return redirect('employe');
    }
}
