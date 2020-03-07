<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\MessageForm;

class MessageFormController extends Controller
{

 public function index()
    {
               $messageform = MessageForm::all();

        return view('sms.MessageForm.index', compact('messageform'));
    }

    public function create()
    {
        return view('sms.MessageForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'title' => 'required','recipient' => 'required','message' => 'required',
        ]);             

        $MessageForm = new MessageForm();
        $MessageForm->title = $request->title;
        $MessageForm->recipient = $request->recipient;
        $MessageForm->message = $request->message;
        $MessageForm->save();
        return redirect()->route('MessageForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $MessageForm = MessageForm::find($id);
        return view('sms.MessageForm.edit', compact('MessageForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'title' => 'required','recipient' => 'required','message' => 'required',
        ]); 

        $MessageForm = MessageForm::find($id);
        
        $MessageForm->title = $request->title;
        $MessageForm->recipient = $request->recipient;
        $MessageForm->message = $request->message;
        $MessageForm->save();
        return redirect()->route('MessageForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $MessageForm = MessageForm::find($id);
        $MessageForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}


