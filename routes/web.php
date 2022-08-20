<?php

use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
Route::get('/system-logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::get('/', function () {
    $events = App\Models\Event::all();
    $fourms = App\Models\ForumTopic::all();
    $careers = App\Models\Career::all();
    $departments = App\Models\Department::paginate(5);

    return view('Frontend.Page.home', [
        "events" => $events,
        "fourms" => $fourms,
        "careers" => $careers,
        "departments" => $departments,
    ]);
});

Route::get("departments", function(){
    $departments = App\Models\Department::all();

    return view('Frontend.Page.departments', [
        "departments" => $departments,
    ]);
});

Route::get("jobs", function(){
    $careers = App\Models\Career::all();

    return view('Frontend.Page.jobs', [
        "careers" => $careers,
    ]);
});

Route::get('/events', function () {
    $events = App\Models\Event::all();

    return view('Frontend.Page.events', [
        "events" => $events,
    ]);
});

Route::get('/gallary', function () {
    $gallerys = App\Models\Gallery::all();

    return view('Frontend.Page.gallary', [
        "gallerys" => $gallerys,
    ]);
});


Route::get('/fourms', function () {
    $fourms = App\Models\ForumTopic::all();

    return view('Frontend.Page.fourms', [
        "fourms" => $fourms,
    ]);
});

Route::get('/contact-us', function () {
    return view('Frontend.Page.contact_us');
});

Route::post("send-message", [ChatController::class, "store"]);
Route::get("messages/{reciver_id}", [ChatController::class, "index"]);
Route::get("users", [ChatController::class, "users"]);
Route::get("users/{name}", [ChatController::class, "userByName"]);
Route::get('/support-chat', function () {
    $sender_user_name = User::find("1");
    $reciver_user_name = User::find("2");
    $chats = DB::select("SELECT * FROM chats 
    WHERE (sender_id = '"."1"."' 
    AND reciver_id = '"."2"."') 
    OR (sender_id = '"."2"."' 
    AND reciver_id = '"."1"."') 
    ORDER BY created_at ASC
    ");
    return view('Frontend.chat', ["chats" => $chats, "reciver_user_name" => $reciver_user_name, "sender_user_name" => $sender_user_name]);
});

// Route::get('/chat', function () {
//     // sender_id reciver_id
//     $chats = DB::select("SELECT * FROM chats 
//     WHERE (sender_id = '"."1"."' 
//     AND reciver_id = '"."2"."') 
//     OR (sender_id = '"."2"."' 
//     AND reciver_id = '"."1"."') 
//     ORDER BY id DESC
//     ");
    
//     // echo "<pre>";
//     // print_r($chats);
//     // echo "</pre>";exit;
//     $allChat = Chat::where("sender_id", "1")->orWhere("reciver_id", "2")->orWhere("sender_id", "2")->orWhere("reciver_id", "1")->get();
//     return view('chat')
//     ->with("chats", $chats)->with("allChat" , $allChat);
// });

// Route::get('/', function () {
//     return view('Admin.layouts.app');
// });



Auth::routes();

Route::post('/save-register', [App\Http\Controllers\RegisterController::class, 'register']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware([Authenticate::class],function(){
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/create-gallary', function () {
        return view('Admin.Gallery.create');
    });

    Route::get('/view-gallery', function () {
        return view('Admin.Gallery.index');
    });

    Route::get("view-gallery", [App\Http\Controllers\Admin\GalleryController::class, "index"]);
    Route::get("create-gallary", [App\Http\Controllers\Admin\GalleryController::class, "create"]);
    Route::post("save-gallery", [App\Http\Controllers\Admin\GalleryController::class, "store"]);
    Route::get("delete-gallary/{id}", [App\Http\Controllers\Admin\GalleryController::class, "destroy"]);
    // Route::get("edit-gallery/{id}", [App\Http\Controllers\Admin\GalleryController::class, "edit"]);
    // Route::post("update-gallery", [App\Http\Controllers\Admin\GalleryController::class, "update"]);

//////////////////////////////////////////////////////////////////

    // Route::get('/create-course', function () {
    //     return view('Admin.Course.create');
    // });

    // Route::get('/view-courses', function () {
    //     return view('Admin.Course.index');
    // });

    Route::get("view-courses", [App\Http\Controllers\Admin\CourseController::class, "index"]);
    Route::get("create-course", [App\Http\Controllers\Admin\CourseController::class, "create"]);
    Route::post("save-course", [App\Http\Controllers\Admin\CourseController::class, "store"]);
    Route::get("delete-course/{id}", [App\Http\Controllers\Admin\CourseController::class, "destroy"]);
    Route::get("edit-course/{id}", [App\Http\Controllers\Admin\CourseController::class, "edit"]);
    Route::post("update-course", [App\Http\Controllers\Admin\CourseController::class, "update"]);

//////////////////////////////////////////////////////////////////

    // Route::get('/create-event', function () {
    //     return view('Admin.Event.create');
    // });

    // Route::get('/view-events', function () {
    //     return view('Admin.Event.index');
    // });

    Route::get("view-events", [App\Http\Controllers\Admin\EventController::class, "index"]);
    Route::get("create-event", [App\Http\Controllers\Admin\EventController::class, "create"]);
    Route::post("save-event", [App\Http\Controllers\Admin\EventController::class, "store"]);
    Route::get("delete-event/{id}", [App\Http\Controllers\Admin\EventController::class, "destroy"]);
    Route::get("edit-event/{id}", [App\Http\Controllers\Admin\EventController::class, "edit"]);
    Route::get("show-event/{id}", [App\Http\Controllers\Admin\EventController::class, "show"]);
    Route::post("update-event", [App\Http\Controllers\Admin\EventController::class, "update"]);

///////////////////////////////////////////////////////////////////

    // Route::get('/create-fourm', function () {
    //     return view('Admin.Fourm.create');
    // });

    // Route::get('/view-fourms', function () {
    //     return view('Admin.Fourm.index');
    // });


    Route::get("view-fourms", [App\Http\Controllers\Admin\FourmController::class, "index"]);
    Route::get("create-fourm", [App\Http\Controllers\Admin\FourmController::class, "create"]);
    Route::post("save-fourm", [App\Http\Controllers\Admin\FourmController::class, "store"]);
    Route::get("delete-fourm/{id}", [App\Http\Controllers\Admin\FourmController::class, "destroy"]);
    Route::get("edit-fourm/{id}", [App\Http\Controllers\Admin\FourmController::class, "edit"]);
    Route::get("view-fourm/{id}", [App\Http\Controllers\Admin\FourmController::class, "show"]);
    Route::post("update-fourm", [App\Http\Controllers\Admin\FourmController::class, "update"]);

///////////////////////////////////////////////////////////////////

    // Route::get('/create-job', function () {
    //     return view('Admin.Job.create');
    // });

    // Route::get('/view-jobs', function () {
    //     return view('Admin.Job.index');
    // });

    Route::get("view-jobs", [App\Http\Controllers\Admin\JobController::class, "index"]);
    Route::get("create-job", [App\Http\Controllers\Admin\JobController::class, "create"]);
    Route::post("save-job", [App\Http\Controllers\Admin\JobController::class, "store"]);
    Route::get("delete-job/{id}", [App\Http\Controllers\Admin\JobController::class, "destroy"]);
    Route::get("edit-job/{id}", [App\Http\Controllers\Admin\JobController::class, "edit"]);
    Route::get("view-job/{id}", [App\Http\Controllers\Admin\JobController::class, "show"]);
    Route::post("update-job", [App\Http\Controllers\Admin\JobController::class, "update"]);

///////////////////////////////////////////////////////////////////

Route::get("view-departments", [App\Http\Controllers\Admin\DepartmentController::class, "index"]);
    Route::get("create-department", [App\Http\Controllers\Admin\DepartmentController::class, "create"]);
    Route::post("save-department", [App\Http\Controllers\Admin\DepartmentController::class, "store"]);
    Route::get("delete-department/{id}", [App\Http\Controllers\Admin\DepartmentController::class, "destroy"]);




    Route::get('/create-user', function () {
        return view('Admin.User.create');
    });

    // Route::get('/view-users', function () {
    //     return view('Admin.User.index');
    // });

    Route::get("view-users", [App\Http\Controllers\Admin\UserController::class, "index"]);
    // Route::get("create-user", [App\Http\Controllers\Admin\UserController::class, "create"]);
    // Route::post("save-user", [App\Http\Controllers\Admin\UserController::class, "store"]);
    // Route::get("delete-user/{id}", [App\Http\Controllers\Admin\UserController::class, "destroy"]);
    // Route::get("edit-user/{id}", [App\Http\Controllers\Admin\UserController::class, "edit"]);
    // Route::post("update-user", [App\Http\Controllers\Admin\UserController::class, "update"]);

///////////////////////////////////////////////////////////////////

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('login');
    });

    Route::get("dashboard", [App\Http\Controllers\Admin\DashboardController::class, "index"]);
    Route::get("change-password", [App\Http\Controllers\Admin\ChangePasswordController::class, "changePassword"]);
    Route::post("change-password", [App\Http\Controllers\Admin\ChangePasswordController::class, "password"]);
});
// });