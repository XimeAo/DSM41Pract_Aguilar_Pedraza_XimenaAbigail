<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Models\teacher;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = subject::all();
         //return $subjects;
       return view('subjects.index', compact('subjects'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher=teacher::all('id','name');
        
        return view('subjects.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new subject;
        $subject->subject=$request->input('subject');
        $subject->teacher_id=$request->input('teachers');
        $subject->save();
        return redirect ('/subjects')->with('message', 'La asignatura se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = subject::find($id);
        return view('subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher=teacher::all();
        $subject=subject::find($id);
        return view('subjects.edit', compact('teacher'))->with('subjects',$subject);
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
        $subject=subject::find($id);
        $input=$request->all();
        $subject->update($input);
        return redirect ('/subjects')->with('message', 'La asignatura se ha actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = subject::findOrFail($id);

        $subject->delete();
        return redirect ('/subjects');
    }
}
