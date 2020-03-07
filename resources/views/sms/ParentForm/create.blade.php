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
All Students
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

@include('sms.partial.msg')

<div class="body">
 <form action="{{ route('ParentForm.store') }}" method="POST" enctype="multipart/form-data">	
 	@csrf
<div class="row clearfix">	
<div class="col-md-6">
<b>First Name</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name">
    </div>
</div>
</div>
<div class="col-md-6">
<b>Last Name</b>
<div class="input-group">
    <div class="form-line">
        <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name">
    </div>
</div>
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
<b>Occupation</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Occupation">
</div>
</div>
</div>
<div class="col-md-6">
<b>ID NO</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="idno" name="idno" class="form-control" placeholder="ID NO">
</div>
</div>
</div>
<div class="col-md-6">
<b>Blood Group</b>
   <select name="blood" id="blood" class="form-control mb-6 is-valid">
  <option>A+</option>
  <option>A-</option>
  <option>B+</option>
  <option>B-</option>
  <option>O+</option>
  <option>O-</option>
  <option>AB+</option>
  <option>AB-</option>
</select>
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
<b>E-Mail</b>
<div class="input-group">
<div class="form-line">
    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
</div>
</div>
</div>
<div class="col-md-6">
<b>Address</b>
<div class="input-group">
<div class="form-line">
   <textarea rows="5" cols="30" name="address" id="address" class="form-control is-valid" placeholder="Address"></textarea>
</div>
</div>
</div>

<div class="col-md-6">
<b>Phone</b>
<div class="input-group">
<div class="form-line">
    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
</div>
</div>
</div>
<div class="col-md-6">
<b>Biography</b>
<div class="input-group">
<div class="form-line">
   <textarea rows="5" cols="30" name="bio" id="bio" class="form-control is-valid" placeholder="Biography"></textarea>
</div>
</div>
</div>
<div class="col-md-6">
<b>Upload Student Photo (150px X 150px)*</b>
<div class="input-group has-success">
<div class="form-line">
  <input type="file" name="photo" id="photo" class="form-control is-valid">
</div>
</div>

</div>
</div>
<div class="row clearfix">
	<div class="col-md-6">
<input type="submit" value="Add New" class="btn btn-primary btn-block waves-effect" name="parent_form">	
	</div>
<div class="col-md-6">      
  <input type="submit" value="Reset" class="btn btn-success btn-block waves-effect">
</div>
</div>
</form>
</div>
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

