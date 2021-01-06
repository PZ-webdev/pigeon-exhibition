<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PigeonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\Admin\AdminController;

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
Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::post('/register',  '\App\Http\Controllers\Auth\RegisterController@register');
/*
|--------------------------------------------------------------------------
| Public Controller
|--------------------------------------------------------------------------
*/
Route::get('/', [PublicController::class, 'index'])->name('index');


Route::get('/send', [AdminController::class, 'send']);
/*
|--------------------------------------------------------------------------
| User Controller
|--------------------------------------------------------------------------
*/

Route::namespace("users")->group(function(){

    // Exhibition page
    Route::get('/wystawa', [ExhibitionController::class, 'exhibition'])->name('exhibition');

    // Exhibition Single page
    Route::get('/wystawa/{id}', [ExhibitionController::class, 'singleExhibition'])->name('singleExhibition');

    // Posts page
    Route::get('/posts', [PostController::class, 'posts'])->name('posts');
    
    // Single post page
    Route::get('/posts/{id}', [PostController::class, 'singlePosts'])->name('singlePost');

    /*
    |--------------------------------------------------------------------------
    | User account 
    |--------------------------------------------------------------------------
    */
    Route::get('/register2', function(){
        return view('auth.register2');
    });

        Route::namespace("account")->prefix('account')->group(function(){
            // User Account main page
            Route::get('/', [UserController::class, 'account'])->name('account');
            
            // User Profile page 
            Route::get('/profil', [UserController::class, 'profile'])->name('profile');

             // Update data user-profil 
             Route::get('/profil/update', [UserController::class, 'updateProfile'])->name('updateProfile');
            
            // View all pigeons
            Route::get('/golebie', [PigeonController::class, 'allpigeons'])->name('allpigeons');
            
            // Add new pigeon
            Route::get('/golebie/dodaj', [PigeonController::class, 'addPigeon'])->name('addPigeon');
            Route::post('/golebie/dodaj', [PigeonController::class, 'addPigeonPost'])->name('addPigeonPost');
            
            // Edit pigeon
            Route::get('/golebie/edytuj/{id}', [PigeonController::class, 'editPigeon'])->name('editPigeon');

            // Edit pigeon post 
            Route::post('/golebie/edytuj/{id}',[PigeonController::class, 'update'])->name('editPigeonPost');

            // Delete Pigeon
            Route::get('/golebie/delete/{id}', [PigeonController::class, 'deletePigeon'])->name('deletePigeon');
       
            // Mask All read notifications
            Route::get('/markasread', [UserController::class, 'markAsReadAll'])->name("markAsReadAll");
            
            // Mask single read notifications
            Route::get('/markasread/{id}', [UserController::class, 'markAsReadSingle'])->name("markAsReadSingle");
            
            
            /*
            |--------------------------------------------------------------------------
            | Panel Administrator 
            |--------------------------------------------------------------------------
            */
            
            Route::namespace("admin")->prefix('admin')->group(function(){
                // Main page Administrator
                Route::get('/', [AdminController::class, 'adminHome'])->name("adminHome");

                // User Profile page 
                Route::get('/uzytkownik/{id}', [AdminController::class, 'singleUser'])->name('singleUser');

                 // All Users view page
                 Route::get('/users', [AdminController::class, 'allUsers'])->name('allUsers');

                // All posts view page
                Route::get('/posts', [AdminController::class, 'allPosts'])->name('allPosts');
                
                // Add post 
                 Route::get('/post/add', [AdminController::class, 'addPost'])->name('addPost');

                 // All pigeons view page
                 Route::get('/pigeons', [AdminController::class, 'allPigeons'])->name('allPigeons');
            });
    });
});



