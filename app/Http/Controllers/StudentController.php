<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\student;
use App\Models\subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
         //return $students;
       return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group=group::all();
        $subject=subject::all();
        return view('students.create',compact('groups','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new student;
        $student->name=$request->input('name');
        $student->age=$request->input('age');
        $student->group_id=$request->input('groups');
        $student->subject_id=$request->input('subjects');
        $student->save();
        return redirect ('/students')->with('message', 'El estudiante se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $student = student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=group::all();
        $subject=subject::all();
        $student = student::find($id);
       

        return view('students.edit',compact('student','groups','subjects'));
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
        $student=student::find($id);
        $input=$request->all();
        $student->update($input);
        return redirect ('/students')->with('message', 'El estudiante ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);

        $student->delete();
        return redirect ('/students');
    }
}
