<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\AddExpenseForm;

class AddExpenseFormController extends Controller
{
    public function index()
    {
               $addexpenseform = AddExpenseForm::all();

        return view('sms.AddExpenseForm.index', compact('addexpenseform'));
    }

    public function create()
    {
        return view('sms.AddExpenseForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'name' => 'required','idno' => 'required','expense_type' => 'required','amount' => 'required','phone' => 'required','email' => 'required','status' => 'required','date' => 'required',
        ]);

        $AddExpenseForm = new AddExpenseForm();
        $AddExpenseForm->name = $request->name;
        $AddExpenseForm->idno = $request->idno;
        $AddExpenseForm->expense_type = $request->expense_type;
        $AddExpenseForm->amount = $request->amount;
        $AddExpenseForm->phone = $request->phone;
        $AddExpenseForm->email = $request->email;
        $AddExpenseForm->status = $request->status;
        $AddExpenseForm->date = $request->date;
        $AddExpenseForm->save();
        return redirect()->route('AddExpenseForm.index')->with('successMsg','Add Expense Data Successfully Saved');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $AddExpenseForm = AddExpenseForm::find($id);
        return view('sms.AddExpenseForm.edit', compact('AddExpenseForm'));
    }

    public function update(Request $request, $id)
    {

         $this->validate($request,[
         'name' => 'required','idno' => 'required','expense_type' => 'required','amount' => 'required','phone' => 'required','email' => 'required','status' => 'required','date' => 'required',
        ]);
        $AddExpenseForm = AddExpenseForm::find($id); 
        $AddExpenseForm->name = $request->name;
        $AddExpenseForm->idno = $request->idno;
        $AddExpenseForm->expense_type = $request->expense_type;
        $AddExpenseForm->amount = $request->amount;
        $AddExpenseForm->phone = $request->phone;
        $AddExpenseForm->email = $request->email;
        $AddExpenseForm->status = $request->status;
        $AddExpenseForm->date = $request->date;
        $AddExpenseForm->save();
        return redirect()->route('AddExpenseForm.index')->with('successMsg','Add Expense Data Successfully Updated');
    }

    public function destroy($id)
    {
         $AddExpenseForm = AddExpenseForm::find($id);
        $AddExpenseForm->delete();
        return redirect()->back()->with('successMsg', 'Add Expense Data Successfully Deleted!!');
    }
}
