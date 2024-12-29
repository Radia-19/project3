<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AddStudentController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeacherController;

// Home Page
Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/about', [HomePageController::class,'about'])->name('about');
Route::get('/course', [HomePageController::class,'course'])->name('course');
Route::get('/contact', [HomePageController::class,'contact'])->name('contact');
Route::get('/search', [HomePageController::class,'search'])->name('search');

// User Authentication
//Route::prefix('user')->group(function () {
    Route::get('login', [UserAuthController::class,'showLogin'])->name('login.show');
    Route::post('login', [UserAuthController::class,'login'])->name('login');
    Route::get('logout', [UserAuthController::class,'logout'])->name('logout');
    Route::get('register', [UserAuthController::class,'showRegister'])->name('register.show');
    Route::post('register', [UserAuthController::class,'register'])->name('register');
//    });

// Admin Authentication
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class,'showLogin'])->name('admin.login.show');
    Route::post('login', [AdminAuthController::class,'login'])->name('admin.login');
    Route::get('logout', [AdminAuthController::class,'logout'])->name('admin.logout');
    });

// Admin Functionality
//Route::group(['prefix' => 'admin', 'middleware' => 'adminAuth'], function () {
Route::prefix('admin')->group(function () {

    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('approval',[AdminDashboardController::class,'approveShow'])->name('admin.approval.show');
    Route::get('approval/updatestatus/{bookId}/{status}',[AdminDashboardController::class,'bookApproveStatusUpdate'])->name('admin.approval.update');
    Route::get('buyout',[AdminDashboardController::class,'buyOutShow'])->name('admin.buyout.show');
    Route::post('buyout/update',[AdminDashboardController::class,'buyOut'])->name('admin.buyout.update');
    Route::get('cashouts',[AdminDashboardController::class,'showCashouts'])->name('admin.cashout.show');
    Route::get('cashouts/updat/{cashout_Id}/{status}',[AdminDashboardController::class,'updateCashouts'])->name('admin.cashout.update');
});


// Add Student....
Route::get('/add/student',[AddStudentController::class,'addStudent'])->name('addStudent');
Route::POST('/store/student',[AddStudentController::class,'storeStudent'])->name('storeStudent');
Route::get('/all/student',[AddStudentController::class,'allStudents'])->name('allStudents');
Route::get('/view/student{id}',[AddStudentController::class,'viewStudent'])->name('viewStudent');
Route::get('/edit/student{id}',[AddStudentController::class,'editStudent'])->name('editStudent');
Route::POST('/update/student{id}',[AddStudentController::class,'updateStudent'])->name('updateStudent');
Route::get('/delete/student{id}',[AddStudentController::class,'deleteStudent'])->name('deleteStudent');

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


Route::get('upload',[UploadController::class,'index'])->name('upload.show');
Route::post('upload',[UploadController::class,'upload'])->name('upload');
Route::get('books',[BookController::class,'index'])->name('books.show');
Route::get('books/send-for-sale/{bookId}',[BookController::class,'sendForSale'])->name('books.sale');
Route::get('myfinancial',[FinancialController::class,'index'])->name('myFinancial.show');
Route::get('myfinancial/cashout',[FinancialController::class,'cashout'])->name('myFinancial.cashout');

