<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AddStudentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\SocialiteController;

// Home Page
Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/about', [HomePageController::class,'about'])->name('about');
Route::get('/contact', [HomePageController::class,'contact'])->name('contact');
Route::get('/search', [HomePageController::class,'search'])->name('search');

Route::get('/course', [HomePageController::class,'course'])->name('course');
Route::get('course/create',[CourseController::class,'create'])->name('course.create.show');
Route::post('course/create',[CourseController::class,'store'])->name('course.create');
Route::get('/course/details/{id}', [CourseController::class, 'show'])->name('course.details');
Route::get('course/edit/{id}', [CourseController::class, 'updateShow'])->name('updatecourse.show');
Route::post('course/edit/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');


//Trainers
Route::get('/task', [HomePageController::class,'task'])->name('task');
Route::get('task/create',[TaskManagerController::class,'create'])->name('task.create.show');
Route::post('task/create',[TaskManagerController::class,'store'])->name('task.create');
Route::get('task/edit/{id}',[TaskManagerController::class,'show'])->name('task.show');
Route::post('task/edit/{id}',[TaskManagerController::class,'update'])->name('task.update');
Route::get('task/edit/{id}/{status}',[TaskManagerController::class,'updateStatus'])->name('task.updateStatus');
Route::get('task/delete/{id}',[TaskManagerController::class,'delete'])->name('task.delete');

Route::get('/file', [HomePageController::class, 'file'])->name('file');
Route::get('upload/create', [FileController::class, 'create'])->name('upload.create.show');
Route::post('upload/create', [FileController::class, 'store'])->name('upload.create');
Route::get('books/edit/{id}', [FileController::class, 'show'])->name('updatebooks.show');
Route::post('books/edit/{id}', [FileController::class, 'update'])->name('books.update');
Route::get('books/delete/{id}', [FileController::class, 'delete'])->name('books.delete');


// User Authentication
Route::get('login', [UserAuthController::class,'showLogin'])->name('login.show');
Route::post('login', [UserAuthController::class,'login'])->name('login');
Route::get('logout', [UserAuthController::class,'logout'])->name('logout');
Route::get('register', [UserAuthController::class,'showRegister'])->name('register.show');
Route::post('register', [UserAuthController::class,'register'])->name('register');
Route::get('google-login/google',[SocialiteController::class,'redirectTogoogle'])->name('googleLogin');
Route::get('google-login/google/callback',[SocialiteController::class,'handleGoogleCallback'])->name('googleCallback');

// Admin Authentication
//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//Route::middleware(['admin'])->group(function() {
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class,'showLogin'])->name('admin.login.show');
    Route::post('login', [AdminAuthController::class,'login'])->name('admin.login');
    Route::get('logout', [AdminAuthController::class,'logout'])->name('admin.logout');
});

// Admin Functionality
//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
Route::prefix('admin')->group(function () {
    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');
});


// Add Student....
Route::get('/add/student',[AddStudentController::class,'addStudent'])->name('addStudent');
Route::POST('/store/student',[AddStudentController::class,'storeStudent'])->name('storeStudent');
Route::get('/all/student',[AddStudentController::class,'allStudents'])->name('allStudents');
Route::get('/view/student{id}',[AddStudentController::class,'viewStudent'])->name('viewStudent');
Route::get('/edit/student{id}',[AddStudentController::class,'editStudent'])->name('editStudent');
Route::POST('/update/student{id}',[AddStudentController::class,'updateStudent'])->name('updateStudent');
Route::get('/delete/student{id}',[AddStudentController::class,'deleteStudent'])->name('deleteStudent');
// Route::get('/admin/approved',[AddStudentController::class,'approvedShow'])->name('admin.approved.show');
// Route::get('/admin/approval/updatestatus/{studentId}/{status}',[AddStudentController::class,'studentApproveStatusUpdate'])->name('admin.approval.update');
//Route::get('/admin/batch/{batchNumber}', [AddStudentController::class, 'batchStudents'])->name('batch.students');

Route::get('/admin/payment',[PaymentController::class,'show'])->name('admin.payment.show');
Route::post('/payment',[PaymentController::class, 'payment'])->name('payment');

// ALL COURSES
Route::get('/admin/allCourse',[CourseController::class,'allCourse'])->name('allCourse');

// All Department....
Route::get('/graph/department',[DepartmentController::class,'graph'])->name('graph');
Route::get('/anime/department',[DepartmentController::class,'anime'])->name('anime');
Route::get('/web/department',[DepartmentController::class,'web'])->name('web');
Route::get('/app/department',[DepartmentController::class,'app'])->name('app');
Route::get('/basic/department',[DepartmentController::class,'basic'])->name('basic');
Route::get('/cyber/department',[DepartmentController::class,'cyber'])->name('cyber');

// Teacher Route....
Route::get('/add/teacher',[TeacherController::class,'addTeacher'])->name('addTeacher');
Route::POST('/store/teacher',[TeacherController::class,'storeTeacher'])->name('storeTeacher');
Route::get('/all/teacher',[TeacherController::class,'allTeacher'])->name('allTeacher');
Route::get('/view/teacher{id}',[TeacherController::class,'viewTeacher'])->name('viewTeacher');
Route::get('/edit/teacher{id}',[TeacherController::class,'editTeacher'])->name('editTeacher');
Route::POST('/update/teacher{id}',[TeacherController::class,'updateTeacher'])->name('updateTeacher');
Route::get('/delete/teacher{id}',[TeacherController::class,'deleteTeacher'])->name('deleteTeacher');



