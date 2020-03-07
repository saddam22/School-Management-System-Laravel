<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\AccountForm;
class AccountFormController extends Controller
{
public function index()
    {
               $accountform = AccountForm::all();

        return view('sms.AccountForm.index', compact('accountform'));
    }

    public function create()
    {
        return view('sms.AccountForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'fname' => 'required','lname' => 'required','user_type' => 'required','gender' => 'required','faname' => 'required','moname' => 'required','dob' => 'required','religion' => 'required','joining' => 'required','email' => 'required','subject' => 'required','class' => 'required','section' => 'required','idno' => 'required','phone' => 'required','address' => 'required',
        ]);                                                                                                                

        $AccountForm = new AccountForm();
        $AccountForm->fname = $request->fname;
        $AccountForm->lname = $request->lname;
        $AccountForm->user_type = $request->user_type;
        $AccountForm->gender = $request->gender;
        $AccountForm->faname = $request->faname;
        $AccountForm->moname = $request->moname;
        $AccountForm->dob = $request->dob;
        $AccountForm->religion = $request->religion;
        $AccountForm->joining = $request->joining;
        $AccountForm->email = $request->email;
        $AccountForm->subject = $request->subject;
        $AccountForm->class = $request->class;
        $AccountForm->section = $request->section;
        $AccountForm->idno = $request->idno;
        $AccountForm->phone = $request->phone;
        $AccountForm->address = $request->address;
        $AccountForm->save();
        return redirect()->route('AccountForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $AccountForm = AccountForm::find($id);
        return view('sms.AccountForm.edit', compact('AccountForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'fname' => 'required','lname' => 'required','user_type' => 'required','gender' => 'required','faname' => 'required','moname' => 'required','dob' => 'required','religion' => 'required','joining' => 'required','email' => 'required','subject' => 'required','class' => 'required','section' => 'required','idno' => 'required','phone' => 'required','address' => 'required',
        ]);    

        $AccountForm = AccountForm::find($id);
        
        $AccountForm->fname = $request->fname;
        $AccountForm->lname = $request->lname;
        $AccountForm->user_type = $request->user_type;
        $AccountForm->gender = $request->gender;
        $AccountForm->faname = $request->faname;
        $AccountForm->moname = $request->moname;
        $AccountForm->dob = $request->dob;
        $AccountForm->religion = $request->religion;
        $AccountForm->joining = $request->joining;
        $AccountForm->email = $request->email;
        $AccountForm->subject = $request->subject;
        $AccountForm->class = $request->class;
        $AccountForm->section = $request->section;
        $AccountForm->idno = $request->idno;
        $AccountForm->phone = $request->phone;
        $AccountForm->address = $request->address;
        $AccountForm->save();
        return redirect()->route('AccountForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $AccountForm = AccountForm::find($id);
        $AccountForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
