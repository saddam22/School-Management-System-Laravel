<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\ExamScheduleForm;

class ExamScheduleFormController extends Controller
{

 public function index()
    {
               $examscheduleform = ExamScheduleForm::all();

        return view('sms.ExamScheduleForm.index', compact('examscheduleform'));
    }

    public function create()
    {
        return view('sms.ExamScheduleForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'exam_name' => 'required','subject_type' => 'required','class' => 'required','section' => 'required','time' => 'required','date' => 'required',
        ]);                                       

        $ExamScheduleForm = new ExamScheduleForm();
        $ExamScheduleForm->exam_name = $request->exam_name;
        $ExamScheduleForm->subject_type = $request->subject_type;
        $ExamScheduleForm->class = $request->class;
        $ExamScheduleForm->section = $request->section;
        $ExamScheduleForm->time = $request->time;
        $ExamScheduleForm->date = $request->date;
        $ExamScheduleForm->save();
        return redirect()->route('ExamScheduleForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ExamScheduleForm = ExamScheduleForm::find($id);
        return view('sms.ExamScheduleForm.edit', compact('ExamScheduleForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'exam_name' => 'required','subject_type' => 'required','class' => 'required','section' => 'required','time' => 'required','date' => 'required',
        ]); 

        $ExamScheduleForm = ExamScheduleForm::find($id);
        
        $ExamScheduleForm->exam_name = $request->exam_name;
        $ExamScheduleForm->subject_type = $request->subject_type;
        $ExamScheduleForm->class = $request->class;
        $ExamScheduleForm->section = $request->section;
        $ExamScheduleForm->time = $request->time;
        $ExamScheduleForm->date = $request->date;
        $ExamScheduleForm->save();
        return redirect()->route('ExamScheduleForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $ExamScheduleForm = ExamScheduleForm::find($id);
        $ExamScheduleForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
