<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\AttendenceForm;
class AttendenceFormController extends Controller
{
public function index()
    {
               $atendenceform = AttendenceForm::all();

        return view('sms.AttendenceForm.index', compact('atendenceform'));
    }

    public function create()
    {
        return view('sms.AttendenceForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'class' => 'required','section' => 'required','month' => 'required','session' => 'required',
        ]);                                                                                    

        $AttendenceForm = new AttendenceForm();
        $AttendenceForm->class = $request->class;
        $AttendenceForm->section = $request->section;
        $AttendenceForm->month = $request->month;
        $AttendenceForm->session = $request->session;
        $AttendenceForm->save();
        return redirect()->route('AttendenceForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $AttendenceForm = AttendenceForm::find($id);
        return view('sms.AttendenceForm.edit', compact('AttendenceForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'class' => 'required','section' => 'required','month' => 'required','session' => 'required',
        ]);   

        $AttendenceForm = AttendenceForm::find($id);
        
        $AttendenceForm->class = $request->class;
        $AttendenceForm->section = $request->section;
        $AttendenceForm->month = $request->month;
        $AttendenceForm->session = $request->session;
        $AttendenceForm->save();
        return redirect()->route('AttendenceForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $AttendenceForm = AttendenceForm::find($id);
        $AttendenceForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
