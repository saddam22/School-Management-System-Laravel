<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\HostelForm;

class HostelFormController extends Controller
{

 public function index()
    {
               $hostelform = HostelForm::all();

        return view('sms.HostelForm.index', compact('hostelform'));
    }

    public function create()
    {
        return view('sms.HostelForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'hostel_name' => 'required','room_number' => 'required','room_type' => 'required','number_bed' => 'required','cost_bed' => 'required',
        ]);                     

        $HostelForm = new HostelForm();
        $HostelForm->hostel_name = $request->hostel_name;
        $HostelForm->room_number = $request->room_number;
        $HostelForm->room_type = $request->room_type;
        $HostelForm->number_bed = $request->number_bed;
        $HostelForm->cost_bed = $request->cost_bed;
        $HostelForm->save();
        return redirect()->route('HostelForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $HostelForm = HostelForm::find($id);
        return view('sms.HostelForm.edit', compact('HostelForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'hostel_name' => 'required','room_number' => 'required','room_type' => 'required','number_bed' => 'required','cost_bed' => 'required',
        ]);  

        $HostelForm = HostelForm::find($id);
        
        $HostelForm->hostel_name = $request->hostel_name;
        $HostelForm->room_number = $request->room_number;
        $HostelForm->room_type = $request->room_type;
        $HostelForm->number_bed = $request->number_bed;
        $HostelForm->cost_bed = $request->cost_bed;
        $HostelForm->save();
        return redirect()->route('HostelForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $HostelForm = HostelForm::find($id);
        $HostelForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
