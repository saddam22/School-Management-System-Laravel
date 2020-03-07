<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdmissionForm;
use App\ParentForm;
use Carbon\Carbon;
use DB;

class AdmissionFormController extends Controller
{

    public function index()
    {
        // And query :
        $fullname = AdmissionForm::select('fname', 'lname')->get();
        $admissionform = AdmissionForm::all();
//table join
        $admission_forms = DB::table('admission_forms')
        ->join('parent_forms','parent_forms.id','=','admission_id')  
        ->select('admission_forms.*','parent_forms.address') 
        ->get(); 

        return view('sms.AdmissionForm.index', ['admission_forms'=>$admission_forms],compact('admissionform'));
    }

    public function create()
    {
        return view('sms.AdmissionForm.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
         'fname' => 'required','lname' => 'required','gender' => 'required','dob' => 'required','roll' => 'required','blood' => 'required','religion' => 'required','email' => 'required','class' => 'required','section' => 'required','admission_id' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

          $photo = $request->file('photo');
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/admissionimages'))
            {
                mkdir('uploads/admissionimages', 0777 , true);
            }
            $photo->move('uploads/admissionimages',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $AdmissionForm = new AdmissionForm();
        $AdmissionForm->fname = $request->fname;
        $AdmissionForm->lname = $request->lname;
        $AdmissionForm->gender = $request->gender;
        $AdmissionForm->dob = $request->dob;
        $AdmissionForm->roll = $request->roll;
        $AdmissionForm->blood = $request->blood;
        $AdmissionForm->religion = $request->religion;
        $AdmissionForm->email = $request->email;
        $AdmissionForm->class = $request->class;
        $AdmissionForm->section = $request->section;
        $AdmissionForm->admission_id = $request->admission_id;
        $AdmissionForm->phone = $request->phone;
        $AdmissionForm->bio = $request->bio;
        $AdmissionForm->photo = $imagename;
        $AdmissionForm->save();
        return redirect()->route('AdmissionForm.index')->with('successMsg','Admission Data Successfully Saved');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $AdmissionForm = AdmissionForm::find($id);
        return view('sms.AdmissionForm.edit', compact('AdmissionForm'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
         'fname' => 'required','lname' => 'required','gender' => 'required','dob' => 'required','roll' => 'required','blood' => 'required','religion' => 'required','email' => 'required','class' => 'required','section' => 'required','admission_id' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

           $photo = $request->file('photo');
        $AdmissionForm = AdmissionForm::find($id);
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/admissionimages'))
            {
                mkdir('uploads/admissionimages', 0777 , true);
            }
            $photo->move('uploads/admissionimages',$imagename);
        }else {
            $imagename = $AdmissionForm->photo;
        }

        $AdmissionForm->fname = $request->fname;
        $AdmissionForm->lname = $request->lname;
        $AdmissionForm->gender = $request->gender;
        $AdmissionForm->dob = $request->dob;
        $AdmissionForm->roll = $request->roll;
        $AdmissionForm->blood = $request->blood;
        $AdmissionForm->religion = $request->religion;
        $AdmissionForm->email = $request->email;
        $AdmissionForm->class = $request->class;
        $AdmissionForm->section = $request->section;
        $AdmissionForm->admission_id = $request->admission_id;
        $AdmissionForm->phone = $request->phone;
        $AdmissionForm->bio = $request->bio;
        $AdmissionForm->photo = $imagename;
        $AdmissionForm->save();
        return redirect()->route('AdmissionForm.index')->with('successMsg','Admission Data Successfully Updated');
    }

    public function destroy($id)
    {
         $AdmissionForm = AdmissionForm::find($id);
        unlink('uploads/admissionimages/'.$AdmissionForm->photo);
        $AdmissionForm->delete();
        return redirect()->back()->with('successMsg', 'Admission Data Successfully Deleted!!');
    }
}
