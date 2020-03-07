<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\LibraryForm;

class LibraryFormController extends Controller
{

    public function index()
    {
               $libraryform = LibraryForm::all();

        return view('sms.LibraryForm.index', compact('libraryform'));
    }

    public function create()
    {
        return view('sms.LibraryForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'book_name' => 'required','subject' => 'required','writter_name' => 'required','class' => 'required','idno' => 'required','publishing_date' => 'required','upload_date' => 'required',
        ]);

        $LibraryForm = new LibraryForm();
        $LibraryForm->book_name = $request->book_name;
        $LibraryForm->subject = $request->subject;
        $LibraryForm->writter_name = $request->writter_name;
        $LibraryForm->class = $request->class;
        $LibraryForm->idno = $request->idno;
        $LibraryForm->publishing_date = $request->publishing_date;
        $LibraryForm->upload_date = $request->upload_date;
        $LibraryForm->save();
        return redirect()->route('LibraryForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $LibraryForm = LibraryForm::find($id);
        return view('sms.LibraryForm.edit', compact('LibraryForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'book_name' => 'required','subject' => 'required','writter_name' => 'required','class' => 'required','idno' => 'required','publishing_date' => 'required','upload_date' => 'required',
        ]);
        $LibraryForm = LibraryForm::find($id);
        $LibraryForm->book_name = $request->book_name;
        $LibraryForm->subject = $request->subject;
        $LibraryForm->writter_name = $request->writter_name;
        $LibraryForm->class = $request->class;
        $LibraryForm->idno = $request->idno;
        $LibraryForm->publishing_date = $request->publishing_date;
        $LibraryForm->upload_date = $request->upload_date;
        $LibraryForm->save();
        return redirect()->route('LibraryForm.index')->with('successMsg','Book Data Successfully Updated');
    }

    public function destroy($id)
    {
         $LibraryForm = LibraryForm::find($id);
        $LibraryForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
