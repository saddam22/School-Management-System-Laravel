<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\NoticeForm;
class NoticeFormController extends Controller
{
 public function index()
    {
               $noticeform = NoticeForm::all();

        return view('sms.NoticeForm.index', compact('noticeform'));
    }

    public function create()
    {
        return view('sms.NoticeForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'title' => 'required','details' => 'required','posted' => 'required','date' => 'required',
        ]);         

        $NoticeForm = new NoticeForm();
        $NoticeForm->title = $request->title;
        $NoticeForm->details = $request->details;
        $NoticeForm->posted = $request->posted;
        $NoticeForm->date = $request->date;
        $NoticeForm->save();
        return redirect()->route('NoticeForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $NoticeForm = NoticeForm::find($id);
        return view('sms.NoticeForm.edit', compact('NoticeForm'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
         'title' => 'required','details' => 'required','posted' => 'required','date' => 'required',
        ]);

        $NoticeForm = NoticeForm::find($id);
        
        $NoticeForm->title = $request->title;
        $NoticeForm->details = $request->details;
        $NoticeForm->posted = $request->posted;
        $NoticeForm->date = $request->date;
        $NoticeForm->save();
        return redirect()->route('NoticeForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $NoticeForm = NoticeForm::find($id);
        $NoticeForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
