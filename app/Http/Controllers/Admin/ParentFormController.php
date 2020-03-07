<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ParentForm;
use Carbon\Carbon;

class ParentFormController extends Controller
{

    public function index()
    {

        // And query :
        $fullname = ParentForm::select('fname', 'lname')->get();
        $parentForm = ParentForm::all();
        return view('sms.ParentForm.index', compact('parentForm'));
    }

    public function create()
    {
       return view('sms.ParentForm.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
         'fname' => 'required','lname' => 'required','gender' => 'required','occupation' => 'required','idno' => 'required','blood' => 'required','religion' => 'required','email' => 'required','address' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

          $photo = $request->file('photo');
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/parentimages'))
            {
                mkdir('uploads/parentimages', 0777 , true);
            }
            $photo->move('uploads/parentimages',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $ParentForm = new ParentForm();
        $ParentForm->fname = $request->fname;
        $ParentForm->lname = $request->lname;
        $ParentForm->gender = $request->gender;
        $ParentForm->occupation = $request->occupation;
        $ParentForm->idno = $request->idno;
        $ParentForm->blood = $request->blood;
        $ParentForm->religion = $request->religion;
        $ParentForm->email = $request->email;
        $ParentForm->address = $request->address;
        $ParentForm->phone = $request->phone;
        $ParentForm->bio = $request->bio;
        $ParentForm->photo = $imagename;
        $ParentForm->save();
        return redirect()->route('ParentForm.index')->with('successMsg','Parent Data Successfully Saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $ParentForm = ParentForm::find($id);
        return view('sms.ParentForm.edit', compact('ParentForm'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'fname' => 'required','lname' => 'required','gender' => 'required','occupation' => 'required','idno' => 'required','blood' => 'required','religion' => 'required','email' => 'required','address' => 'required','phone' => 'required','bio' => 'required','photo' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $photo = $request->file('photo');
        $ParentForm = ParentForm::find($id);
        //$slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $photo->getClientOriginalExtension();
            if (!file_exists('uploads/parentimages'))
            {
                mkdir('uploads/parentimages', 0777 , true);
            }
            $photo->move('uploads/parentimages',$imagename);
        }else {
            $imagename = $ParentForm->photo;
        }

        $ParentForm->fname = $request->fname;
        $ParentForm->lname = $request->lname;
        $ParentForm->gender = $request->gender;
        $ParentForm->occupation = $request->occupation;
        $ParentForm->idno = $request->idno;
        $ParentForm->blood = $request->blood;
        $ParentForm->religion = $request->religion;
        $ParentForm->email = $request->email;
        $ParentForm->address = $request->address;
        $ParentForm->phone = $request->phone;
        $ParentForm->bio = $request->bio;
        $ParentForm->photo = $imagename;
        $ParentForm->save();
        return redirect()->route('ParentForm.index')->with('successMsg','Parent Data Successfully Updated');
    }

    public function destroy($id)
    {
        $ParentForm = ParentForm::find($id);
        unlink('uploads/parentimages/'.$ParentForm->photo);
        $ParentForm->delete();
        return redirect()->back()->with('successMsg', 'Parent Data Successfully Deleted!!');
    }
}
