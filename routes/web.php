<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AddStudentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\SocialiteController;

// Home Page
Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/about', [HomePageController::class,'about'])->name('about');
Route::get('/course', [HomePageController::class,'course'])->name('course');
Route::get('/details', [HomePageController::class,'details'])->name('details');
Route::get('/contact', [HomePageController::class,'contact'])->name('contact');
Route::get('/search', [HomePageController::class,'search'])->name('search');


//Trainers
Route::get('/task', [HomePageController::class,'task'])->name('task');
Route::get('task/create',[TaskManagerController::class,'create'])->name('task.create.show');
Route::post('task/create',[TaskManagerController::class,'store'])->name('task.create');
Route::get('task/edit/{id}',[TaskManagerController::class,'show'])->name('task.show');
Route::post('task/edit/{id}',[TaskManagerController::class,'update'])->name('task.update');
Route::get('task/edit/{id}/{status}',[TaskManagerController::class,'updateStatus'])->name('task.updateStatus');
Route::get('task/delete/{id}',[TaskManagerController::class,'delete'])->name('task.delete');

Route::get('/file', [HomePageController::class, 'file'])->name('file');
Route::get('upload', [FileController::class, 'create'])->name('upload.show');
Route::post('upload', [FileController::class, 'upload'])->name('upload');
Route::get('books/edit/{id}', [FileController::class, 'show'])->name('updatebooks.show');
Route::post('books/edit/{id}', [FileController::class, 'update'])->name('books.update');  // Changed to PUT
Route::get('books/delete/{id}', [FileController::class, 'delete'])->name('books.delete');  // Changed to DELETE

// Route::get('books/approved/{bookId}',[FileController::class,'approved'])->name('book.approved');
// Route::get('approval',[FileController::class,'approveShow'])->name('approval.show');
// Route::get('approval/updatestatus/{bookId}/{status}',[FileController::class,'bookApproveStatusUpdate'])->name('approval.update');
// Route::get('myfinancial',[FinancialController::class,'index'])->name('myFinancial.show');
// Route::get('myfinancial/cashout',[FinancialController::class,'cashout'])->name('myFinancial.cashout');



// User Authentication
Route::get('login', [UserAuthController::class,'showLogin'])->name('login.show');
Route::post('login', [UserAuthController::class,'login'])->name('login');
Route::get('logout', [UserAuthController::class,'logout'])->name('logout');
Route::get('register', [UserAuthController::class,'showRegister'])->name('register.show');
Route::post('register', [UserAuthController::class,'register'])->name('register');
Route::get('google-login/google',[SocialiteController::class,'redirectTogoogle'])->name('googleLogin');
Route::get('google-login/google/callback',[SocialiteController::class,'handleGoogleCallback'])->name('googleCallback');

// Admin Authentication
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//Route::middleware(['admin'])->group(function() {
//Route::prefix('admin')->group(function () {
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
//Route::get('approval',[AddStudentController::class,'approveShow'])->name('admin.approval.show');
Route::get('/admin/approval/updatestatus/{studentId}/{status}',[AddStudentController::class,'studentApproveStatusUpdate'])->name('admin.approval.update');
Route::get('/admin/batch/{batchNumber}', [AddStudentController::class, 'batchStudents'])->name('batch.students');


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



