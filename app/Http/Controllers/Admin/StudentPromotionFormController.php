<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\StudentPromotionForm;
class StudentPromotionFormController extends Controller
{
    public function index()
    {
               $studentpromotionform = StudentPromotionForm::all();

        return view('sms.StudentPromotionForm.index', compact('studentpromotionform'));
    }

    public function create()
    {
        return view('sms.StudentPromotionForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'current_session' => 'required','promote_session' => 'required','promotion_from' => 'required','promotion_to' => 'required',
        ]);     

        $StudentPromotionForm = new StudentPromotionForm();
        $StudentPromotionForm->current_session = $request->current_session;
        $StudentPromotionForm->promote_session = $request->promote_session;
        $StudentPromotionForm->promotion_from = $request->promotion_from;
        $StudentPromotionForm->promotion_to = $request->promotion_to;
        $StudentPromotionForm->save();
        return redirect()->route('StudentPromotionForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $StudentPromotionForm = StudentPromotionForm::find($id);
        return view('sms.StudentPromotionForm.edit', compact('StudentPromotionForm'));
    }

    public function update(Request $request, $id)
    {
          $this->validate($request,[
         'current_session' => 'required','promote_session' => 'required','promotion_from' => 'required','promotion_to' => 'required',
        ]); 

        $StudentPromotionForm = StudentPromotionForm::find($id);
        
         $StudentPromotionForm->current_session = $request->current_session;
        $StudentPromotionForm->promote_session = $request->promote_session;
        $StudentPromotionForm->promotion_from = $request->promotion_from;
        $StudentPromotionForm->promotion_to = $request->promotion_to;
        $StudentPromotionForm->save();
        return redirect()->route('StudentPromotionForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $StudentPromotionForm = StudentPromotionForm::find($id);
        $StudentPromotionForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
