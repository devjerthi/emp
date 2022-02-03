<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddDepartment;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output['departments']=AddDepartment::orderBy('id','DESC')->paginate(5);
        return view('departments.index',$output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('departments.create');
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
            'title'=>'required',
            'details'=>'required'
        ]);
        $user = new AddDepartment;
        $user->title =$request->title;
        $user->details =$request->details;
    
        $user->save();
        return redirect()->route('departments.index')
        ->with('success','user added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AddDepartments $user)
    {
        return view('departments.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = AddDepartment::find($id);
        return view('departments.edit',compact('user'));
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
            'title'=>'required',
            'details'=>'required'
        ]);
       
        $user = new AddDepartment;

        $user->title =$request->title;
        $user->details =$request->details;
      
        $user->update();
        
        return redirect()->route('departments.index')
        ->with('success','user updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AddDepartment::find($id);
        $user->delete();
      
        return redirect()->route('departments.index');
    }
}
