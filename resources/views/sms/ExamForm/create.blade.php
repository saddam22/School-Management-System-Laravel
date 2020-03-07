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
All Class Routine
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
 <form action="{{ route('ExamForm.store') }}" method="POST"> 
    @csrf
<div class="row clearfix">  
<div class="col-md-6">
<b>Grade Name</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="grade_name" name="grade_name" class="form-control" placeholder="Grade Name">
    </div>
</div>        
</div>         
<div class="col-md-6">
<b>Grade Point</b>
 <select name="grade_point" id="grade_point" class="form-control mb-6 is-valid">
  <option>5</option>
  <option>4.80</option>
  <option>4.50</option>
  <option>3.00</option>
  <option>2.00</option>
</select>
</div>
<div class="col-md-6">
<b>Percentage From</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="percentage_form" name="percentage_form" class="form-control" placeholder="Percentage From">
    </div>
</div>        
</div>    
<div class="col-md-6">
<b>Percentage Upto</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="percentage_upto" name="percentage_upto" class="form-control" placeholder="Percentage Upto">
    </div>
</div>        
</div> 
<div class="col-md-6">
<b>Comments</b>
<div class="input-group">
<div class="form-line">
   <textarea rows="5" cols="30" name="comments" id="comments" class="form-control is-valid" placeholder="Comment"></textarea>
</div>
</div>
</div>

</div><!--end of row-->
<div class="row clearfix">
    <div class="col-md-6">
<input type="submit" value="Add New" class="btn btn-primary btn-block waves-effect" name="exam_form">  
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

