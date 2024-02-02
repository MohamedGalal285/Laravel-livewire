<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Categories\ListCategories;
use App\Livewire\Products\ListProducts;
use App\Livewire\SubCategories\ListSubCategories;
use Illuminate\Routing\Router;
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


Route::prefix('home')->group(function(Router $route){
    $route->get('/',[FrontendController::class,'index'])->name('home.index');
    $route->get('/contact',[FrontendController::class,'contact'])->name('home.contact');
    $route->get('/archive',[FrontendController::class,'archive'])->name('home.archive');
    $route->get('/menu',[FrontendController::class,'menu'])->name('home.menu');
    $route->get('/single',[FrontendController::class,'single'])->name('home.single');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/products', ListProducts::class)->name('admin.products.index');
Route::get('/admin/categories', ListCategories::class)->name('admin.categories.index');
Route::get('/admin/sub_categories', ListSubCategories::class)->name('admin.sub_categories.index');

require __DIR__.'/auth.php';
