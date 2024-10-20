<?php

use Illuminate\Support\Facades\Route;

//Backend
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CourseAssignController;
use App\Http\Controllers\EnrollController;

/*Fronted
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Backend
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('teacher_register', [AuthController::class, 'teacher_register']);
Route::post('store-register_teacher', [AuthController::class, 'registerStoreTeacher']);
Route::get('student_register', [AuthController::class, 'student_register']);
Route::post('store-register_student', [AuthController::class, 'registerStoreStudent']);
Route::get('register', [AuthController::class, 'register']);


Route::get('login',[AuthController::class,'login']);
Route::post('store-login',[AuthController::class,'loginstore']);
// Route::get('/admin/dashboard', [AuthController::class, 'loginstore'])->name('admin.dashboard');
// Route::get('/admin/dashboard', [PagesController::class, 'index'])->name('admin.dashboard');
Route::get('logout',[AuthController::class,'logout']);
Route::get('student-dashboard',[AuthController::class,'studentDashboard']);
Route::get('admin-dashboard',[AuthController::class,'adminDashboard']);
Route::get('teacher-dashboard',[AuthController::class,'teacherDashboard']);
// Route::middleware(['checkedLoggedIn'])->group(function(){
//     //Route::get('dashboard',[AuthController::class,'dashboard']);

//     // Route::post('store-login',[AuthController::class,'storeLogin']);

//     Route::middleware(['IsTeacherIn'])->group(function (){
//     Route::get('dashboard', [AuthController::class, 'dashboard']);
//     Route::get('users', [AuthController::class, 'users']);
//     Route::get('about', [AuthController::class, 'about']);
//     //Route::get('users',[AuthController::class,'allUsers']);
//     Route::get('approve-user/{id}',[AuthController::class,'approve']);
//     });
//     Route::get('logout',[AuthController::class,'logout']);
// });
Route::get('/create-session', [SessionController::class, 'create_session']);
Route::post('/store-session', [SessionController::class, 'store_session']);

Route::get('/session', [SessionController::class, 'all']);

Route::get('/edit-session/{pid}', [SessionController::class, 'edit']);
Route::post('/update-session/{pid}', [SessionController::class, 'update']);
Route::get('/delete-session/{pid}', [SessionController::class, 'delete']);

Route::get('create-course', [CreateController::class, 'create']);
Route::post('store-course', [CreateController::class, 'storecourse']);
Route::get('all', [CreateController::class, 'all']);
Route::get('edit/{id}',[CreateController::class,'edit']);
Route::post('store-update/{id}',[CreateController::class,'storeUpdate']);

Route::get('delete-course/{id}',[CreateController::class,'delete']);

// student  Enrollment 
Route::get('create-enroll', [EnrollController::class, 'enroll']);
Route::post('store-enrollment', [EnrollController::class, 'storeenroll']);

Route::get('section', [SectionController::class, 'section']);

Route::get('create-course-assign', [CourseAssignController::class, 'createCourseAssign']);
Route::post('store-course-assign',[CourseAssignController::class,'storeAssignCourse']);
Route::get('all-course-assign', [CourseAssignController::class, 'allCourseAssign']);
Route::get('edit-course-assign/{id}', [CourseAssignController::class, 'editCourseAssign']);
Route::post('update-course-assign/{id}',[CourseAssignController::class,'storeEditAssignCourse']);
Route::get('delete-course-session/{id}', [CourseAssignController::class, 'deleteCourseAssign']);

Route::get('unapproved-list-view', [AuthController::class, 'viewapprovedList']);
Route::get('approve-user/{id}', [AuthController::class, 'approveList']);

Route::get('create-assignment', [SessionController::class, 'createAssignment']);
Route::post('store-assignment',[SessionController::class,'storeAssignment']);

Route::get('new-group', [SessionController::class, 'newGroup']);
Route::post('store-new-group', [SessionController::class, 'storeNewGroup']);
Route::get('view-new-group', [SessionController::class, 'viewNewGroup']);
Route::get('all-assignment', [SessionController::class, 'allAssignment']);
Route::get('all-course', [SessionController::class, 'allCourse']);


Route::group(['prefix'=>'/admin'],function(){
    // Route::get('/dashboard', [PagesController::class, 'index'])->name('admin.dashboard');

   Route::group(['prefix'=>'/student'],function(){
    Route::get('/manage', [StudentController::class, 'index'])->name('student.manage');
    Route::get('/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::post('/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

   });

});
