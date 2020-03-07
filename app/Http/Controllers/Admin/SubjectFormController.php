<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\SubjectForm;
class SubjectFormController extends Controller
{
    public function index()
    {
               $subjectform = SubjectForm::all();

        return view('sms.SubjectForm.index', compact('subjectform'));
    }

    public function create()
    {
        return view('sms.SubjectForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'subject_name' => 'required','subject_type' => 'required','class' => 'required','code' => 'required',
        ]);

        $SubjectForm = new SubjectForm();
        $SubjectForm->subject_name = $request->subject_name;
        $SubjectForm->subject_type = $request->subject_type;
        $SubjectForm->class = $request->class;
        $SubjectForm->code = $request->code;
        $SubjectForm->save();
        return redirect()->route('SubjectForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $SubjectForm = SubjectForm::find($id);
        return view('sms.SubjectForm.edit', compact('SubjectForm'));
    }

    public function update(Request $request, $id)
    {
          $this->validate($request,[
         'subject_name' => 'required','subject_type' => 'required','class' => 'required','code' => 'required',
        ]);

        $SubjectForm = SubjectForm::find($id);
        
        $SubjectForm->subject_name = $request->subject_name;
        $SubjectForm->subject_type = $request->subject_type;
        $SubjectForm->class = $request->class;
        $SubjectForm->code = $request->code;
        $SubjectForm->save();
        return redirect()->route('SubjectForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $SubjectForm = SubjectForm::find($id);
        $SubjectForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
