<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\ExamForm;

class ExamFormController extends Controller
{
public function index()
    {
               $examform = ExamForm::all();

        return view('sms.ExamForm.index', compact('examform'));
    }

    public function create()
    {
        return view('sms.ExamForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'grade_name' => 'required','grade_point' => 'required','percentage_form' => 'required','percentage_upto' => 'required','comments' => 'required',
        ]);                                      

        $ExamForm = new ExamForm();
        $ExamForm->grade_name = $request->grade_name;
        $ExamForm->grade_point = $request->grade_point;
        $ExamForm->percentage_form = $request->percentage_form;
        $ExamForm->percentage_upto = $request->percentage_upto;
        $ExamForm->comments = $request->comments;
        $ExamForm->save();
        return redirect()->route('ExamForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ExamForm = ExamForm::find($id);
        return view('sms.ExamForm.edit', compact('ExamForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'grade_name' => 'required','grade_point' => 'required','percentage_form' => 'required','percentage_upto' => 'required','comments' => 'required',
        ]);  

        $ExamForm = ExamForm::find($id);
        
       $ExamForm->grade_name = $request->grade_name;
        $ExamForm->grade_point = $request->grade_point;
        $ExamForm->percentage_form = $request->percentage_form;
        $ExamForm->percentage_upto = $request->percentage_upto;
        $ExamForm->comments = $request->comments;
        $ExamForm->save();
        return redirect()->route('ExamForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $ExamForm = ExamForm::find($id);
        $ExamForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
