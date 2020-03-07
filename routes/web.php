<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
=============================
sms controller
=============================
*/

Route::group(['prefix'=>'admin','namespace'=>'admin'], function(){
	Route::get('dashboard','DashboardController@index')->name('sms.home.index');
	Route::get('student','DashboardController@student')->name('sms.home.student');
	Route::get('parent','DashboardController@parent')->name('sms.home.parent');
	Route::get('teacher','DashboardController@teacher')->name('sms.home.teacher');
	Route::resource('AdmissionForm','AdmissionFormController');
	Route::resource('ParentForm','ParentFormController');
	Route::resource('TeacherForm','TeacherFormController');
	Route::resource('LibraryForm','LibraryFormController');
	Route::resource('AddExpenseForm','AddExpenseFormController');
	Route::resource('ClassForm','ClassFormController');
	Route::resource('ClassRoutineForm','ClassRoutineFormController');
	Route::resource('ExamForm','ExamFormController');
	Route::resource('HostelForm','HostelFormController');
	Route::resource('MessageForm','MessageFormController');
	Route::resource('NoticeForm','NoticeFormController');
	Route::resource('SubjectForm','SubjectFormController');
	Route::resource('TransportForm','TransportFormController');
	Route::resource('AccountForm','AccountFormController');
	Route::resource('AttendenceForm','AttendenceFormController');
	Route::resource('StudentPromotionForm','StudentPromotionFormController');
	Route::resource('ExamScheduleForm','ExamScheduleFormController');
});
