<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
    	return view('sms.home.index');
    }
    public function student(){
    	return view('sms.home.student');
    }
    public function parent(){
    	return view('sms.home.parent');
    }
    public function teacher(){
    	return view('sms.home.teacher');
    }
}
