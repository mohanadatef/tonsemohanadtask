<?php
    
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
    Auth::routes();
    Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('admin');
    Route::resource('user',App\Http\Controllers\UserController::class,['except'=>['show','update']])
        ->parameters(['user'=>'id']);
    Route::prefix('/user')->name('user.')->group(function()
    {
        Route::post('/{id}',[App\Http\Controllers\UserController::class,'update'])->name('update');
    });
    
    Route::prefix('/friend')->name('friend.')->group(function()
    {
        Route::get('/send/{id}',[App\Http\Controllers\FriendController::class,'send'])->name('send');
        Route::get('/accept/{id}',[App\Http\Controllers\FriendController::class,'accept'])->name('accept');
        Route::get('/cansel/{id}',[App\Http\Controllers\FriendController::class,'cansel'])->name('cansel');
        Route::get('/remove/{id}',[App\Http\Controllers\FriendController::class,'remove'])->name('remove');
    });
    
    Route::get('message/{id}',[App\Http\Controllers\MessageController::class,'write'])->name('message.write');
    Route::post('message/{id}',[App\Http\Controllers\MessageController::class,'send'])->name('message.send');