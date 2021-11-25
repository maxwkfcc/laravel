<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');

Route::get('products', [ProductsController::class, 'index'])->name('nameofproductpage');

Route::get('products/about', [ProductsController::class, 'about']);

Route::get('products/{id}', [ProductsController::class, 'show'])->where('id','[0-9]+');

Route::get('products/showbyname/{name}', [ProductsController::class, 'showbyname'])->where('name', '[a-zA-Z]');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/users', function() {
    return 'HI I M HERE';
});

Route::get('/usersjson', function() {
    return response()->json([
        'course'=>'testing',
        'name'=>'max'
    ]);
});

Route::get('usersredirect', function () {
    return redirect('/');
});


Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');



require __DIR__.'/auth.php';
