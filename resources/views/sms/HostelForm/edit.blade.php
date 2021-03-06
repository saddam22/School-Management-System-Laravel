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
<a href="{{ route('HostelForm.index') }}" class="btn btn-primary waves-effect">All Books</a><br>
@include('sms.partial.msg')

<div class="body">
 <form action="{{ route('HostelForm.update',$HostelForm->id) }}" name="editForm" method="POST">   
        @csrf
    @method('put')
<div class="row clearfix">  
<div class="col-md-6">
<b>Hostel Name</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="hostel_name" name="hostel_name" value="{{ $HostelForm->hostel_name }}" class="form-control" placeholder="Hostel Name">
    </div>
</div>        
</div>             
<div class="col-md-6">
<b>Room Number</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="room_number" name="room_number" value="{{ $HostelForm->room_number }}" class="form-control" placeholder="Room Number">
    </div>
</div>        
</div>        
<div class="col-md-6">
<b>Room Type</b>
 <select name="room_type" id="room_type" class="form-control mb-6 is-valid">
  <option>Big</option>
  <option>Medium</option>
  <option>Large</option>
</select>
</div>
<div class="col-md-6">
<b>Number of Bed</b>
   <select name="number_bed" id="number_bed" class="form-control mb-6 is-valid">
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
</select>
</div>
<div class="col-md-6">
<b>Cost Per Bed</b>
<div class="input-group form-float">
    <div class="form-line">
        <input type="text" id="cost_bed" name="cost_bed" value="{{ $HostelForm->cost_bed }}" class="form-control" placeholder="Cost Per Bed">
    </div>
</div>        
</div>  

</div><!--end of row-->
<div class="row clearfix">
    <div class="col-md-6">
<input type="submit" value="Add New" class="btn btn-primary btn-block waves-effect" name="hostel_form">  
    </div>
<div class="col-md-6">      
  <input type="submit" value="Reset" class="btn btn-success btn-block waves-effect">
</div>
</div>
</form>
</div>
<script type="text/javascript">
    document.forms['editForm'].elements['room_type'].value='{{ $HostelForm->room_type}}';
    document.forms['editForm'].elements['number_bed'].value='{{ $HostelForm->number_bed}}';
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

