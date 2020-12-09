<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('login','AuthController@login')->name('user.login');
Route::view('login', 'auth.login')->name('login');
Route::view('register','auth.register')->name('register');



Route::group(['middleware' => 'auth'], function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::get('logout','AuthController@logout')->name('user.logout');
});

Route::view('class', 'academic.grade');
Route::view('syllabus', 'academic.syllabus');
Route::view('assignment', 'academic.assignment');
Route::view('assign_subject', 'academic.assign_subject');
Route::view('grade_routine', 'academic.grade_routine');

Route::view('studentattendance', 'student.studentattendance');
Route::view('staffattendance', 'teacher.staffattendance');
Route::view('bankdetails', 'bank.create');

Route::view('income', 'transcation.income');
Route::view('chartaccount', 'transcation.chartaccount');
Route::view('paymentmethod', 'transcation.paymentmethod');
Route::view('pay&payer', 'transcation.pay&payer');
Route::view('expense', 'transcation.expense');

Route::view('feetype', 'studentfee.feetype');
Route::view('paymenthistory', 'studentfee.paymenthistory');
Route::view('createinovice', 'studentfee.createinovice');
Route::view('allinvioce', 'studentfee.allinvioce');


Route::view('book', 'booklibrary.book');
Route::view('bookcategory', 'booklibrary.bookcategory');
Route::view('librarycreate', 'booklibrary.librarycreate');
Route::view('member', 'booklibrary.member');


Route::view('vehicel', 'transport.vehicel');
Route::view('transport', 'transport.transport');
Route::view('trasportmember', 'transport.trasportmember');

Route::view('hostelcategory', 'hostel.hostelcategory');
Route::view('hostelcreate', 'hostel.hostelcreate');
Route::view('member', 'hostel.member');


Route::view('examlist', 'examination.examlist');
Route::view('examattendence', 'examination.examattendence');
Route::view('examschedule', 'examination.examschedule');


Route::resource('user', 'UserController');
Route::resource('school', 'SchoolController');





Route::resource('student', 'StudentController');
Route::resource('teacher', 'TeacherController');
Route::resource('grade', 'GradeController');
Route::resource('section', 'SectionController');
Route::resource('subject', 'SubjectController');
Route::resource('assignsubject', 'AssignsubjectController');
Route::resource('promote', 'PromoteController');




// Route::get('/view-grades','GradeController@getGradeInfo');


