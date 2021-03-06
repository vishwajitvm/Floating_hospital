<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\userdashboardController ;
use App\Http\Controllers\userProfileController ;
use Illuminate\Support\Facades\Auth ;

use App\Models\User ;
use Illuminate\Support\Facades\Artisan;

//admin
use App\Http\Controllers\admin\ManageDepartmentController ;
use App\Http\Controllers\admin\AttendenceManagementAdminCOntroller ;
use App\Http\Controllers\admin\ManageLocationController ;
use App\Http\Controllers\admin\ManageSchedulesCOntroller ;
use App\Http\Controllers\admin\ManageEmployeeVIdeosController ;
use App\Http\Controllers\admin\ManageNoticeController ;


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

/*
||
||
back rout start here
||
||
*/
Route::group(['middleware' => 'prevent-back-history'],function(){
    // Auth::routes();
    // Route::get('/home', 'HomeController@index');

  /*
||
||
back rout end here
||
||
*/

//redirect route after login
Route::get('redirects' , [AdminController::class , 'loginRedirects'])->middleware('admin') ;

// Route::get('user', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

//authentication
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->name('dashboard')->middleware('admin');


Route::get('dashboard' ,
function() {
    return view('admin.index') ;
}
)->name('dashboard')->middleware('admin') ;


//Logout functionality here--
Route::get('/admin/logout' , [AdminController::class , 'Logout'])->name('admin.logout') ;


//  USER MANAGMENT ALL ROUTES WILL BE HERE
//group for users[xyz]<=-=URLS
Route::prefix('users')->group(function() {
    //view Route for Users
    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view') ;   //user view

    //ADD user Group Route
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add') ;   

    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store') ;  
    
    //view user profile here viewuserprofile
    Route::get('/viewuserprofile/{id}' , [UserController::class , 'UserProfileDetailsData'])->name('users.viewuserprofile') ;   

    //edit users
    Route::get('/edit/{id}' , [UserController::class , 'UserEdit'])->name('users.edit') ;   

    Route::post('/update/{id}' , [UserController::class , 'UserUpdate'])->name('users.update') ;   

    //Delete Users
    Route::get('/delete/{id}' , [UserController::class , 'UserDelete'])->name('users.delete') ;   

    //manage requests here
    Route::get('/managerequest' , [UserController::class , 'UserManageRequsts'])->name('user.managerequest') ; 
    
    //manage inacive users
    Route::get('/inactiveusers' , [UserController::class , 'UserInactiveUsers'])->name('user.inactiveusers') ; 

    //view user approve page here
    Route::get('/userapprove/{id}' , [UserController::class , 'UserApprovalRequestPageView'])->name('users.userapprove') ;   

    //post the data for approving the user userapprovalupdate
    Route::post('/userapprovalupdate/{id}' , [UserController::class , 'UserApprovalRequestUpdate'])->name('users.userapprovalupdate') ;   


}) ;

//AJAX REQUEST TO GETE THE DEPARTMENT DATA
Route::post('/ajax-get-departments' , [UserController::class , 'AJAXRrequestToGetDepartmentData'])->name('ajax-get-departments') ;


//
//GROUP FOR YOUR PROFILE AND CHAANGE PASSWORD 
//
Route::prefix('profile')->group(function() {
    //view Route for Users
    Route::get('/view' , [ProfileController::class , 'ProfileView'])->name('profile.view') ; 

    //EDIT profile
    Route::get('/edit' , [ProfileController::class , 'ProfileEdit'])->name('profile.edit') ;   

    Route::post('/store' , [ProfileController::class , 'ProfileStore'])->name('profile.store') ;   

    //Update Password OR change Password
    Route::get('/password/view' , [ProfileController::class , 'PasswordView'])->name('password.view') ;   

    Route::post('/password/update' , [ProfileController::class , 'PasswordUpdate'])->name('password.update') ;   
}) ;

//
//MANAGE LOCATIONS 
//
Route::prefix('manage-location')->group(function() {
    //add
    Route::get('/add' , [ManageLocationController::class , 'AddLocation'])->name('manage-location.add') ;
    
    //Store
    Route::post('/store' , [ManageLocationController::class , 'StoreLocations'])->name('manage-location.store') ;

    //view
    Route::get('/view' , [ManageLocationController::class , 'ViewLocations'])->name('manage-location.view') ;


});



//
//Manages Department 
//
Route::prefix('admin-department')->group(function() {
    //add
    Route::get('/add' , [ManageDepartmentController::class , 'DepartmentManagementADMIN'])->name('admin-department.add') ; 

    //store
    Route::post('/store' , [ManageDepartmentController::class , 'StoreDepartment'])->name('admin-department.store') ; 

    //delete
    Route::get('/delete/{id}' , [ManageDepartmentController::class , 'DeleteDepartment'])->name('admin-department.delete') ; 

}) ;

//
//MANAGE USERS OR EMPLOYEE ATTENDENCE
//
Route::prefix('attendence-management')->group(function() {
    //add
    Route::get('/add' , [AttendenceManagementAdminCOntroller::class , 'AddAddendenceOfEmployee'])->name('attendence-management.add') ; 

    //store
    Route::post('/store' , [AttendenceManagementAdminCOntroller::class , 'StoreAttendence'])->name('attendence-management.store') ; 

    //viewall
    Route::get('/viewall' , [AttendenceManagementAdminCOntroller::class , 'ViewallUsersattendence'])->name('attendence-management.viewall') ; 

    //view todays view-today
    Route::get('/view-today' , [AttendenceManagementAdminCOntroller::class , 'ViewTodaysAttendence'])->name('attendence-management.view-today') ; 


}) ;

//AJAX REQUEST TO FILTER USER ACCORDING TO DEPARTMENT
Route::post('/ajax-get-department-data' , [AttendenceManagementAdminCOntroller::class , 'AJAXgetEmployeeDataBasedOnDepartment'])->name('ajax-get-department-data') ; 


//Manages Employeee
Route::prefix('manage-schedule')->group(function() {
    //view all employees here
    Route::get('/add' , [ManageSchedulesCOntroller::class , 'AddSchedules'])->name('manage-schedule.add') ;
    
    //store
    Route::post('/store' , [ManageSchedulesCOntroller::class , 'StoreSchedules'])->name('manage-schedule.store') ; 

    //view all
    Route::get('/view' , [ManageSchedulesCOntroller::class , 'ViewallSchedules'])->name('manage-schedule.view') ;

    //view today
    Route::get('/view-today' , [ManageSchedulesCOntroller::class , 'VIewTodaySchedules'])->name('manage-schedule.view-today') ;

    //edit
    Route::get('/edit/{id}' , [ManageSchedulesCOntroller::class , 'EditSchedules'])->name('manage-schedule.edit') ;

    //update
    Route::post('/update/{id}' , [ManageSchedulesCOntroller::class , 'UpdateSchedules'])->name('manage-schedule.update') ;

    //Delete DeleteSchedule
    Route::get('/delete/{id}' , [ManageSchedulesCOntroller::class , 'DeleteSchedule'])->name('manage-schedule.delete') ;

});

//
//Manage Employee Videos
//
Route::prefix('manage-employee-videos')->group(function() {
    //add
    Route::get('/add' , [ManageEmployeeVIdeosController::class , 'AddManageEmployeeVideos'])->name('manage-employee-videos.add') ;

    //store
    Route::post('/store' , [ManageEmployeeVIdeosController::class , 'StoreEmployeeVideos'])->name('manage-employee-videos.store') ;

    //view
    Route::get('/view' , [ManageEmployeeVIdeosController::class , 'ViewEmployeeVIdeos'])->name('manage-employee-videos.view') ;

    //delete
    Route::get('/delete/{id}' , [ManageEmployeeVIdeosController::class , 'DeleteEmployeeVideos'])->name('manage-employee-videos.delete') ;

});

//
//Manage Notices of employee
//
Route::prefix('manage-notice')->group(function() {
    //add
    Route::get('/add' , [ManageNoticeController::class , 'AddMangeNotice'])->name('manage-notice.add') ;

    //store
    Route::post('/store' , [ManageNoticeController::class , 'StoreNotices'])->name('manage-notice.store') ;

    //view
    Route::get('/view' , [ManageNoticeController::class , 'ViewAllNotice'])->name('manage-notice.view') ;


}) ;





//
//************************************************************ *//
////////////////USERS DASHBOARD ROUTING//////////////////////////
//********************************************************* *//

//loading user index page after login as user
Route::get('userdashboard', function () {
    return view('users_dashboard.index');

})->name('userdashboard');

Route::view('calendar' , 'users_dashboard.body.calendar')->name('calendar') ;

Route::get('/userdashboard/logout' , [userdashboardController::class , 'logout'])->name('userdashboard.logout') ;

//manage user profile at userdashbord
Route::prefix('userprofile')->group( function() {
    //view the profile of users
    Route::get('/view' , [userProfileController::class , 'userprofileview'])->name('userprofile.view') ;

    //edit user profile
    Route::get('/edit' , [userProfileController::class , 'userprofileEdit'])->name('userprofile.edit') ;

    //updating the profile
    Route::post('/store' , [userProfileController::class , 'userprofileStore'])->name('userprofile.store') ;

    //view the change password page
    Route::get('/userpassword/view' , [userProfileController::class , 'userPasswordView'])->name('userpassword.view') ;

    //updating the password
    Route::post('/userpassword/update' , [userProfileController::class , 'userPasswordUpdate'])->name('userpassword.update') ;
}) ;








//************************************************************ *//
///////////////Finally Website Route here[ARAGMA]////////////////
//********************************************************* *//



Route::get('/cache' , function() {
    Artisan::Call('cache:clear') ;
}) ;
Route::get('/storage' , function() {
    Artisan::Call('storage:link') ;
}) ;





































}); //preventing backlogin here [clearing backhistory here don't delete it and also  make routes under this not out side this closing tags]
