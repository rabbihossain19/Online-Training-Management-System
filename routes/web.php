<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\AdminEnrollController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category/{id}', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail/{id}', [HomeController::class, 'trainingDetail'])->name('training.detail');
/* student course Enroll*/
Route::get('/training/enroll/{id}', [EnrollController::class, 'index'])->name('training.enroll');
Route::post('/training/new-enroll/{id}', [EnrollController::class, 'newEnroll'])->name('training.new-enroll');
Route::get('/training/complete-enroll/{id}', [EnrollController::class, 'completeEnroll'])->name('training.complete-enroll');


Route::post('/student-login', [StudentAuthController::class, 'login'])->name('student.login');

Route::middleware('student')->group(function (){

    Route::get('/student-dashboard', [StudentAuthController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student-all-course', [StudentController::class, 'allCourse'])->name('student.all-course');
    Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');

});


Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'loginRegistration'])->name('login-registration');
Route::post('/student-register', [StudentAuthController::class, 'register'])->name('student.register');

Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('login.teacher');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('login.teacher');

Route::middleware(['teacher'])->group(function (){

    Route::get('/teacher-dashboard', [TeacherAuthController::class, 'dashboard'])->name('dashboard.teacher');
    Route::post('/teacher-logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');


    Route::get('/course-add', [CourseController::class, 'index'])->name('course.add');
    Route::post('/course-create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/course-manage', [CourseController::class, 'manage'])->name('course.manage');
    Route::get('/course-edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course-update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course-delete/{id}', [CourseController::class, 'delete'])->name('course.delete');

});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/add-teacher', [TeacherController::class, 'index'])->name('add.teacher');
    Route::get('/dashboard/manage-teacher', [TeacherController::class, 'manage'])->name('manage.teacher');
    Route::post('/dashboard/create-teacher', [TeacherController::class, 'create'])->name('create.teacher');
    Route::get('/dashboard/edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit.teacher');
    Route::post('/dashboard/update-teacher/{id}', [TeacherController::class, 'update'])->name('update.teacher');
    Route::get('/dashboard/delete-teacher/{id}', [TeacherController::class, 'delete'])->name('delete.teacher');


    Route::get('/teacher/add-category', [CategoryController::class, 'index'])->name('add.category');
    Route::get('/teacher/manage-category', [CategoryController::class, 'manage'])->name('manage.category');
    Route::post('/teacher/create-category', [CategoryController::class, 'create'])->name('create.category');
    Route::get('/teacher/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/teacher/update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/teacher/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');



    Route::get('/admin/manage-course', [AdminCourseController::class, 'index'])->name('admin.manage-course');
    Route::get('/admin/course-detail/{id}', [AdminCourseController::class, 'detail'])->name('admin.course-detail');
    Route::get('/admin/update-course-status/{id}', [AdminCourseController::class, 'updateStatus'])->name('admin.update-course-status');
    Route::get('/admin/update-course-offer-status/{id}', [AdminCourseController::class, 'updateOfferStatus'])->name('admin.update-course-offer-status');
    Route::post('/admin/update-course-offer/{id}', [AdminCourseController::class, 'updateCourseOffer'])->name('admin.update-course-offer');
    Route::get('/admin/course-delete/{id}', [AdminCourseController::class, 'delete'])->name('admin.course-delete');



    Route::get('/admin/manage-enroll', [AdminEnrollController::class, 'index'])->name('admin.manage-enroll');
    Route::get('/admin/detail-enroll/{id}', [AdminEnrollController::class, 'detail'])->name('admin.enroll-detail');
    Route::get('/admin/edit-enroll-status/{id}', [AdminEnrollController::class, 'editStatus'])->name('admin.edit-enroll-status');
    Route::post('/admin/update-enroll-status/{id}', [AdminEnrollController::class, 'updateStatus'])->name('admin.update-enroll-status');
    Route::get('/admin/delete-enroll/{id}', [AdminEnrollController::class, 'delete'])->name('admin.delete-enroll');

});
