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

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('sms') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('sms') }}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('sms') }}/css/themes/all-themes.css" rel="stylesheet" />
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
All Exam Schedule
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
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
<thead>
     <tr>
        <th>SL NO</th>
        <th>Exam Name</th>
        <th>Subject</th>
        <th>Class</th>
        <th>Section</th>
        <th>Time</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($examscheduleform as $key=>$examscheduleforms)
   <tr>
       <td>{{ $key + 1 }}</td>
       <td>{{ $examscheduleforms->exam_name }}</td>
       <td>{{ $examscheduleforms->subject_type }}</td>
       <td>{{ $examscheduleforms->class }}</td>
       <td>{{ $examscheduleforms->section }}</td>
       <td>{{ $examscheduleforms->time }}</td>
       <td>{{ $examscheduleforms->date }}</td>
       <td>
            <a href="{{ route('ExamScheduleForm.edit', $examscheduleforms->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a> 
        <form id="delete-form-{{ $examscheduleforms->id }}" action="{{ route('ExamScheduleForm.destroy', $examscheduleforms->id) }}" style="display: none;" method="post">
          @csrf
          @method('delete')
        </form>
        <button type="button" class="btn btn-danger btn-sm" onclick="
        if(confirm('Are you sure? You want to delete this?')){
           event.preventDefault();
           document.getElementById('delete-form-{{ $examscheduleforms->id }}').submit();
          }else {
           event.preventDefault();
          }
        "><i class="material-icons">delete</i></button> 
       </td>
   </tr>
    @endforeach
</tbody>
</table>
</div>
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

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{ asset('sms') }}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="{{ asset('sms') }}/js/admin.js"></script>
    <script src="{{ asset('sms') }}/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="{{ asset('sms') }}/js/demo.js"></script>
@endsection