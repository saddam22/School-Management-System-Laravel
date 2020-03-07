<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TeacherForm;
use Carbon\Carbon;
use DB;

class TeacherFormController extends Controller
{

    public function index()
    {
                // And query :
        $fullname = TeacherForm::select('fname', 'lname')->get();
        $teacherform = TeacherForm::all();
        return view('sms.TeacherForm.index', compact('teacherform'));
    }


    public function create()
    {
       return view('sms.TeacherForm.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
         'fname' => 'required','lname' => 'required','gender' => 'required','dob' => 'required','idno' => 'required','blood' => 'required','religion' => 'required','email' => 'required','class' => 'required','section' => 'required','address' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

          $photo = $request->file('photo');
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/teacherimages'))
            {
                mkdir('uploads/teacherimages', 0777 , true);
            }
            $photo->move('uploads/teacherimages',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $TeacherForm = new TeacherForm();
        $TeacherForm->fname = $request->fname;
        $TeacherForm->lname = $request->lname;
        $TeacherForm->gender = $request->gender;
        $TeacherForm->dob = $request->dob;
        $TeacherForm->idno = $request->idno;
        $TeacherForm->blood = $request->blood;
        $TeacherForm->religion = $request->religion;
        $TeacherForm->email = $request->email;
        $TeacherForm->class = $request->class;
        $TeacherForm->section = $request->section;
        $TeacherForm->address = $request->address;
        $TeacherForm->phone = $request->phone;
        $TeacherForm->bio = $request->bio;
        $TeacherForm->photo = $imagename;
        $TeacherForm->save();
        return redirect()->route('TeacherForm.index')->with('successMsg','Teacher Data Successfully Saved');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $TeacherForm = TeacherForm::find($id);
        return view('sms.TeacherForm.edit', compact('TeacherForm'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'fname' => 'required','lname' => 'required','gender' => 'required','dob' => 'required','idno' => 'required','blood' => 'required','religion' => 'required','email' => 'required','class' => 'required','section' => 'required','address' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

           $photo = $request->file('photo');
        $TeacherForm = TeacherForm::find($id);
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/teacherimages'))
            {
                mkdir('uploads/teacherimages', 0777 , true);
            }
            $photo->move('uploads/teacherimages',$imagename);
        }else {
            $imagename = $TeacherForm->photo;
        }

        $TeacherForm->fname = $request->fname;
        $TeacherForm->lname = $request->lname;
        $TeacherForm->gender = $request->gender;
        $TeacherForm->dob = $request->dob;
        $TeacherForm->idno = $request->idno;
        $TeacherForm->blood = $request->blood;
        $TeacherForm->religion = $request->religion;
        $TeacherForm->email = $request->email;
        $TeacherForm->class = $request->class;
        $TeacherForm->section = $request->section;
        $TeacherForm->address = $request->address;
        $TeacherForm->phone = $request->phone;
        $TeacherForm->bio = $request->bio;
        $TeacherForm->photo = $imagename;
        $TeacherForm->save();
        return redirect()->route('TeacherForm.index')->with('successMsg','Teacher Data Successfully Updated');
    }

    public function destroy($id)
    {
       
         $TeacherForm = TeacherForm::find($id);
        unlink('uploads/teacherimages/'.$TeacherForm->photo);
        $TeacherForm->delete();
        return redirect()->back()->with('successMsg', 'Teacher Data Successfully Deleted!!');
    }
}
