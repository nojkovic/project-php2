<?php

use App\Http\Controllers\OsnovniController as OsnovniControllerAlias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[ \App\Http\Controllers\HomeController::class,"index"]);
Route::get('/home',[ \App\Http\Controllers\HomeController::class,"index"])->name("home");
Route::post('/home',[ \App\Http\Controllers\HomeController::class,"store"]);
Route::get('/contact',[ \App\Http\Controllers\ContactController::class,"index"])->name("contact");
Route::post('/contact',[ \App\Http\Controllers\ContactController::class,"message"]);
Route::get('/gallery',[ \App\Http\Controllers\GalleryController::class,"index"])->name("gallery");
Route::get('/about',[ \App\Http\Controllers\AboutController::class,"index"])->name("about");
Route::get('/loginForm',[ \App\Http\Controllers\LoginController::class,"index"])->name("login");
Route::get('/register',[ \App\Http\Controllers\SingUpController::class,"index"])->name("register");
Route::post('/singUp',[ \App\Http\Controllers\SingUpController::class,"store"])->name("singUp");
Route::post('/login',[ \App\Http\Controllers\LoginController::class,"login"])->name("log");
Route::get('/filter',[ \App\Http\Controllers\GalleryController::class,"index"])->name('filter');
Route::get('/author',[ \App\Http\Controllers\HomeController::class,"author"])->name('author');



Route::middleware(\App\Http\Middleware\UserMiddLogin::class)->group(function(){
    Route::get('/logout',[ \App\Http\Controllers\LoginController::class,"logout"])->name("logout");
    Route::get('reservation',[\App\Http\Controllers\ReservationController::class,"index"])->name("reservation");
    Route::get('/reservationFilter',[\App\Http\Controllers\ReservationController::class,"filter"]);
    Route::post('/reservationSession',[\App\Http\Controllers\ReservationController::class,"addReserve"]);
    Route::get('/checkout',[\App\Http\Controllers\ReservationController::class,"check"])->name('checkout');
    Route::delete('/delete/{id}',[\App\Http\Controllers\ReservationController::class,"destroy"]);
    Route::post('/reservationStore',[\App\Http\Controllers\ReservationController::class,"store"]);
    Route::get('/checkoutAll',[\App\Http\Controllers\ReservationController::class,"all"])->name('checkoutAll');;
});

Route::middleware(\App\Http\Middleware\AdminMidd::class)->group(function(){
    Route::get('/admin2',[ \App\Http\Controllers\UserAdminController::class,"index"])->name("admin2");
    Route::get('/new',[\App\Http\Controllers\UserAdminController::class,'create'])->name('new');
    Route::post('/addUser',[\App\Http\Controllers\UserAdminController::class,'store'])->name('addUser');
    Route::delete('/deleteUser/{id}',[\App\Http\Controllers\UserAdminController::class,'destroy'])->name('deleteUser');
    Route::get('/editUser/{id}',[\App\Http\Controllers\UserAdminController::class,'edit'])->name('editUser');
    Route::patch('/editUser/{id}',[\App\Http\Controllers\UserAdminController::class,'update'])->name('editUser');

    Route::get('/role',[ \App\Http\Controllers\RoleController::class,"index"])->name("role");
    Route::post('/addRole',[ \App\Http\Controllers\RoleController::class,"store"])->name("addRole");
    Route::get('/newRole',[\App\Http\Controllers\RoleController::class,'create'])->name('newRole');
    Route::get('/editRole/{id}',[\App\Http\Controllers\RoleController::class,'edit'])->name('editRole');
    Route::patch('/updateRole/{id}',[\App\Http\Controllers\RoleController::class,'update'])->name('updateRole');
    Route::delete('/deleteRole/{id}',[\App\Http\Controllers\RoleController::class,'destroy'])->name('deleteRole');

    Route::get('/reservationA',[ \App\Http\Controllers\ReservationAdminController::class,"index"])->name("reservationA");
    Route::delete('/deleteReservationA/{id}',[ \App\Http\Controllers\ReservationAdminController::class,"destroy"])->name("deleteReservationA");
    Route::get('/editReservationA/{id}',[\App\Http\Controllers\ReservationAdminController::class,'edit'])->name('editReservationA');

    Route::delete('/deleteReservationLineA/{id}',[ \App\Http\Controllers\ReservationLineAdminController::class,"destroy"])->name("deleteReservationLineA");
    Route::get('/editReservationLineA/{id}',[\App\Http\Controllers\ReservationLineAdminController::class,'edit'])->name('editReservationLineA');
    Route::get('/newReservationLineA',[\App\Http\Controllers\ReservationLineAdminController::class,'create'])->name('newReservationLineA');
    Route::post('/addReservationLine',[ \App\Http\Controllers\ReservationLineAdminController::class,"store"])->name("addReservationLine");
    Route::patch('/updateReservationLineA/{id}',[ \App\Http\Controllers\ReservationLineAdminController::class,"update"])->name("updateReservationLineA");

    Route::get('/team',[ \App\Http\Controllers\TeamAdminController::class,"index"])->name("team");
    Route::post('/addTeam',[ \App\Http\Controllers\TeamAdminController::class,"store"])->name("addTeam");
    Route::get('/newTeam',[\App\Http\Controllers\TeamAdminController::class,'create'])->name('newTeam');
    Route::get('/editTeam/{id}',[\App\Http\Controllers\TeamAdminController::class,'edit'])->name('editTeam');
    Route::delete('/deleteTeam/{id}',[\App\Http\Controllers\TeamAdminController::class,'destroy'])->name('deleteTeam');
    Route::patch('/updateTeam/{id}',[\App\Http\Controllers\TeamAdminController::class,'update'])->name('updateTeam');

    Route::get('/newsletter',[ \App\Http\Controllers\NewsletterController::class,"index"])->name("newsletter");
    Route::get('/newNewsletter',[\App\Http\Controllers\NewsletterController::class,'create'])->name('newNewsletter');
    Route::post('/addNewsletter',[ \App\Http\Controllers\NewsletterController::class,"store"])->name("addNewsletter");
    Route::delete('/deleteNewsletter/{id}',[\App\Http\Controllers\NewsletterController::class,"destroy"])->name('deleteNewsletter');

    Route::get('/menus',[ \App\Http\Controllers\MenuController::class,"index"])->name("menus");
    Route::get('/newMenus',[\App\Http\Controllers\MenuController::class,'create'])->name('newMenus');
    Route::post('/addMenus',[\App\Http\Controllers\MenuController::class,'store'])->name('addMenus');
    Route::get('/editMenu/{id}',[\App\Http\Controllers\MenuController::class,'edit'])->name('editMenu');
    Route::delete('/deleteMenu/{id}',[\App\Http\Controllers\MenuController::class,'destroy'])->name('deleteMenu');
    Route::patch('/updateMenus/{id}',[\App\Http\Controllers\MenuController::class,'update'])->name('updateMenus');

    Route::get('/galleries',[ \App\Http\Controllers\GalleriesAdminController::class,"index"])->name("galleries");
    Route::get('/newGalleries',[\App\Http\Controllers\GalleriesAdminController::class,'create'])->name('newGalleries');
    Route::post('/addGalleries',[\App\Http\Controllers\GalleriesAdminController::class,'store'])->name('addGalleries');
    Route::get('/editGalleries/{id}',[\App\Http\Controllers\GalleriesAdminController::class,'edit'])->name('editGalleries');
    Route::delete('/deleteGalleries/{id}',[\App\Http\Controllers\GalleriesAdminController::class,'destroy'])->name('deleteGalleries');
    Route::patch('/updateGalleries/{id}',[\App\Http\Controllers\GalleriesAdminController::class,'update'])->name('updateGalleries');

    Route::get('/contacts',[ \App\Http\Controllers\ContactController::class,"allContacts"])->name("contacts");
    Route::delete('/deleteContacts/{id}',[ \App\Http\Controllers\ContactController::class,"destroy"])->name("deleteContacts");

    Route::get('/categories',[ \App\Http\Controllers\CategoryAdminController::class,"index"])->name("categories");
    Route::get('/newCategories',[\App\Http\Controllers\CategoryAdminController::class,'create'])->name('newCategories');
    Route::get('/editCategories/{id}',[\App\Http\Controllers\CategoryAdminController::class,'edit'])->name('editCategories');
    Route::delete('/deleteCategories/{id}',[\App\Http\Controllers\CategoryAdminController::class,'destroy'])->name('deleteCategories');
    Route::post('/addCategories',[\App\Http\Controllers\CategoryAdminController::class,'store'])->name('addCategories');
    Route::patch('/updateCategories/{id}',[\App\Http\Controllers\CategoryAdminController::class,'update'])->name('updateCategories');

    Route::get('/logs',[ \App\Http\Controllers\AdminController::class,"index"])->name("logs");
    Route::delete('/deleteLogs/{id}',[ \App\Http\Controllers\AdminController::class,"destroy"])->name("deleteLogs");
    Route::get('/filterAct',[ \App\Http\Controllers\AdminController::class,"index"])->name("filterAct");
    Route::get('/filterLogs',[ \App\Http\Controllers\AdminController::class,"filter"])->name("filterLogs");
});
