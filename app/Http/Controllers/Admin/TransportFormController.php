<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\TransportForm;
class TransportFormController extends Controller
{

    public function index()
    {
               $transportform = TransportForm::all();

        return view('sms.TransportForm.index', compact('transportform'));
    }

    public function create()
    {
        return view('sms.TransportForm.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
         'route_name' => 'required','vehicle_number' => 'required','driver_name' => 'required','license_number' => 'required','phone' => 'required',
        ]);

        $TransportForm = new TransportForm();
        $TransportForm->route_name = $request->route_name;
        $TransportForm->vehicle_number = $request->vehicle_number;
        $TransportForm->driver_name = $request->driver_name;
        $TransportForm->license_number = $request->license_number;
        $TransportForm->phone = $request->phone;
        $TransportForm->save();
        return redirect()->route('TransportForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $TransportForm = TransportForm::find($id);
        return view('sms.TransportForm.edit', compact('TransportForm'));
    }

    public function update(Request $request, $id)
    {
          $this->validate($request,[
         'route_name' => 'required','vehicle_number' => 'required','driver_name' => 'required','license_number' => 'required','phone' => 'required',
        ]);


        $TransportForm = TransportForm::find($id);
        
        $TransportForm->route_name = $request->route_name;
        $TransportForm->vehicle_number = $request->vehicle_number;
        $TransportForm->driver_name = $request->driver_name;
        $TransportForm->license_number = $request->license_number;
        $TransportForm->phone = $request->phone;
        $TransportForm->save();
        return redirect()->route('TransportForm.index')->with('successMsg','Book Data Successfully Saved');
    }

    public function destroy($id)
    {
         $TransportForm = TransportForm::find($id);
        $TransportForm->delete();
        return redirect()->back()->with('successMsg', 'Book Data Successfully Deleted!!');
    }
}
