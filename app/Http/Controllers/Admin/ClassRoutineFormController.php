<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\ClassRoutineForm;

class ClassRoutineFormController extends Controller
{
public function index()
    {
               $classroutineform = ClassRoutineForm::all();

        return view('sms.ClassRoutineForm.index', compact('classroutineform'));
    }

    public function create()
    {
        return view('sms.ClassRoutineForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'subject_name' => 'required','subject_type' => 'required','class' => 'required','code' => 'required',
        ]);                                               

        $ClassRoutineForm = new ClassRoutineForm();
        $ClassRoutineForm->subject_name = $request->subject_name;
        $ClassRoutineForm->subject_type = $request->subject_type;
        $ClassRoutineForm->class = $request->class;
        $ClassRoutineForm->code = $request->code;
        $ClassRoutineForm->save();
        return redirect()->route('ClassRoutineForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ClassRoutineForm = ClassRoutineForm::find($id);
        return view('sms.ClassRoutineForm.edit', compact('ClassRoutineForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'subject_name' => 'required','subject_type' => 'required','class' => 'required','code' => 'required',
        ]);  

        $ClassRoutineForm = ClassRoutineForm::find($id);
        
        $ClassRoutineForm->subject_name = $request->subject_name;
        $ClassRoutineForm->subject_type = $request->subject_type;
        $ClassRoutineForm->class = $request->class;
        $ClassRoutineForm->code = $request->code;
        $ClassRoutineForm->save();
        return redirect()->route('ClassRoutineForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $ClassRoutineForm = ClassRoutineForm::find($id);
        $ClassRoutineForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}