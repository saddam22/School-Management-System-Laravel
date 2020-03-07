<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\ClassForm;
class ClassFormController extends Controller
{
public function index()
    {
               $classform = ClassForm::all();

        return view('sms.ClassForm.index', compact('classform'));
    }

    public function create()
    {
        return view('sms.ClassForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'teacher_name' => 'required','idno' => 'required','gender' => 'required','class' => 'required','subject' => 'required','section' => 'required','time' => 'required','date' => 'required','phone' => 'required','email' => 'required',
        ]);                                                                            

        $ClassForm = new ClassForm();
        $ClassForm->teacher_name = $request->teacher_name;
        $ClassForm->idno = $request->idno;
        $ClassForm->gender = $request->gender;
        $ClassForm->class = $request->class;
        $ClassForm->subject = $request->subject;
        $ClassForm->section = $request->section;
        $ClassForm->time = $request->time;
        $ClassForm->date = $request->date;
        $ClassForm->phone = $request->phone;
        $ClassForm->email = $request->email;
        $ClassForm->save();
        return redirect()->route('ClassForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ClassForm = ClassForm::find($id);
        return view('sms.ClassForm.edit', compact('ClassForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'teacher_name' => 'required','idno' => 'required','gender' => 'required','class' => 'required','subject' => 'required','section' => 'required','time' => 'required','date' => 'required','phone' => 'required','email' => 'required',
        ]);   

        $ClassForm = ClassForm::find($id);
        
        $ClassForm->teacher_name = $request->teacher_name;
        $ClassForm->idno = $request->idno;
        $ClassForm->gender = $request->gender;
        $ClassForm->class = $request->class;
        $ClassForm->subject = $request->subject;
        $ClassForm->section = $request->section;
        $ClassForm->time = $request->time;
        $ClassForm->date = $request->date;
        $ClassForm->phone = $request->phone;
        $ClassForm->email = $request->email;
        $ClassForm->save();
        return redirect()->route('ClassForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $ClassForm = ClassForm::find($id);
        $ClassForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
