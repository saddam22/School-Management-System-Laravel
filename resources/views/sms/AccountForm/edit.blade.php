@extends('sms.master')

@section('sms_back_title')
School Management System
@endsection

@section('css')
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('sms') }}/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('sms') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('sms') }}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('sms') }}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="{{ asset('sms') }}/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('sms') }}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('sms') }}/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
    <link href="{{ asset('sms') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


 
@endsection

 @section('dashboard')
 Dashboard
 @endsection   

@section('main-content')
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
All Account
</h2>
<ul class="header-dropdown m-r--5">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="material-icons">more_vert</i>
</a>
<ul class="dropdown-menu pull-right">
    <li><a href="javascript:void(0);">Action</a></li>
    <li><a href="javascript:void(0);">Another action</a></li>
    <li><a href="javascript:void(0);">Something else here</a></li>
</ul>
</li>
</ul>
</div>
<a href="{{ route('AccountForm.index') }}" class="btn btn-primary waves-effect">All Exam Grade Point</a><br>
@include('sms.partial.msg')

<div class="body">
 <form action="{{ route('AccountForm.update',$AccountForm->id) }}" method="POST" name="editForm" enctype="multipart/form-data"> 
    @csrf
        @method('put')
<div class="row clearfix">  
<div class="col-md-6">
<b>First Name</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="fname" name="fname" value="{{ $AccountForm->fname }}" class="form-control" placeholder="First Name">
    </div>
</div>
</div>
<div class="col-md-6">
<b>Last Name</b>
<div class="input-group">
    <div class="form-line">
        <input type="text" id="lname" name="lname" value="{{ $AccountForm->lname }}" class="form-control" placeholder="Last Name">
    </div>
</div>
</div>
<div class="col-md-6">
<b>User Type</b>
    <select id="user_type" name="user_type" class="form-control show-tick">
        <option>--Select User--</option>
        <option>Super Admin</option>
        <option>Admin</option>
        <option>User</option>
    </select>
</div>
<div class="col-md-6">
<b>Gender</b>
    <select id="gender" name="gender" class="form-control show-tick">
        <option>--Select Gender--</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
    </select>
</div>
<div class="col-md-6">
<b>Father's Name</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="faname" name="faname" value="{{ $AccountForm->faname }}" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">
<b>Mother's Name</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="moname" name="moname" value="{{ $AccountForm->moname }}" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">
<b>Date of Birth</b>
<div class="input-group">
<div class="form-line">
    <input type="date" id="dob" name="dob" value="{{ $AccountForm->dob }}" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">
<b>Religion</b>
<select name="religion" id="religion" class="form-control mb-6 is-valid">
  <option>Islam</option>
  <option>Hinduism</option>
  <option>Buddism</option>
  <option>Christian</option>
  <option>Others</option>
</select>
</div>
<div class="col-md-6">
<b>Joining Data *</b>
<div class="input-group">
<div class="form-line">
    <input type="date" id="joining" name="joining" value="{{ $AccountForm->joining }}" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">
<b>E-Mail</b>
<div class="input-group">
<div class="form-line">
    <input type="email" id="email" name="email" value="{{ $AccountForm->email }}" class="form-control" placeholder="Email">
</div>
</div>
</div> 
<div class="col-md-6">
<b>Subject</b>
 <select name="subject" id="subject" class="form-control mb-6 is-valid">
  <option>Bangla</option>
  <option>English</option>
  <option>Physics</option>
  <option>Chemistry</option>
  <option>Biology</option>
</select>
</div>
<div class="col-md-6">
<b>Class</b>
   <select name="class" id="class" class="form-control mb-6 is-valid">
  <option>Play</option>
  <option>Nursery</option>
  <option>One</option>
  <option>Two</option>
  <option>Three</option>
  <option>Four</option>
  <option>Five</option>
  <option>Six</option>
</select>
</div>
<div class="col-md-6">
<b>Section</b>
 <select name="section" id="section" class="form-control mb-6 is-valid">
  <option>Pakhi</option>
  <option>Chaya</option>
  <option>Modur</option>
  <option>Mon Tara</option>
  <option>Soptamboli</option>
</select>
</div>  
<div class="col-md-6">
<b>ID NO</b>
<div class="input-group">
    <div class="form-line">
        <input type="text" id="idno" name="idno" value="{{ $AccountForm->idno }}" class="form-control" placeholder="ID NO">
    </div>
</div>
</div>
<div class="col-md-6">
<b>Phone</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="phone" name="phone" value="{{ $AccountForm->phone }}" class="form-control" placeholder="Phone">
</div>
</div>
</div> 
<div class="col-md-6">
<b>Address</b>
<div class="input-group">
<div class="form-line">
   <textarea rows="5" cols="30" name="address" id="address" class="form-control is-valid" placeholder="Address">{{ $AccountForm->address }}</textarea>
</div>
</div>
</div>

</div>
<div class="row clearfix">
    <div class="col-md-6">
<input type="submit" value="Update" class="btn btn-primary btn-block waves-effect" name="account_form">  
    </div>
<div class="col-md-6">      
  <input type="submit" value="Reset" class="btn btn-success btn-block waves-effect">
</div>
</div>
</form>
</div>
<script type="text/javascript">
document.forms['editForm'].elements['user_type'].value='{{ $AccountForm->user_type }}';
document.forms['editForm'].elements['gender'].value='{{ $AccountForm->gender }}';
document.forms['editForm'].elements['religion'].value='{{ $AccountForm->religion }}';
document.forms['editForm'].elements['subject'].value='{{ $AccountForm->subject }}';
document.forms['editForm'].elements['class'].value='{{ $AccountForm->class }}';
document.forms['editForm'].elements['section'].value='{{ $AccountForm->section }}';
</script>
</div>
</div>
</div>
@endsection

@section('js')
    <!-- Jquery Core Js -->
    <script src="{{ asset('sms') }}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('sms') }}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('sms') }}/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="{{ asset('sms') }}/js/admin.js"></script>
      <script src="{{ asset('sms') }}/js/pages/forms/advanced-form-elements.js"></script>
    <!-- Select Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Demo Js -->
    <script src="{{ asset('sms') }}/js/demo.js"></script>
@endsection

