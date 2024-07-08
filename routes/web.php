<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\WhoWeAreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/admin', function () {
    return view('auth.login');
});



// For migrate
Route::get('/migrate', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('migrate');
    // Artisan::call('migrate:fresh');
    return "Done!";
});

Route::get('/seeder-run', function () {
    Artisan::call('db:seed');
    // Artisan::call('db:seed --class=MailTemplateSeeder');
    return "Done!";
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {

    // Dashboard Route
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Project Route
    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/list', [ProjectController::class, 'list'])->name('list');
        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ProjectController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ProjectController::class, 'delete'])->name('delete');
        Route::get('/gallery-images-delete/{id}', [ProjectController::class, 'galleryImagesDelete'])->name('galleryImagesDelete');
    });

    // CMS Route
    Route::prefix('cms')->name('cms.')->group(function () {
        Route::get('/', [CmsController::class, 'index'])->name('index');
        Route::post('/store', [CmsController::class, 'store'])->name('store');
    });

    // Category Route
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/list', [CategoryController::class, 'list'])->name('list');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });

    // Product Route
    Route::prefix('product')->name('services.')->group(function () {
        Route::get('/', [ServicesController::class, 'index'])->name('index');
        Route::get('/list', [ServicesController::class, 'list'])->name('list');
        Route::get('/create', [ServicesController::class, 'create'])->name('create');
        Route::post('/store', [ServicesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ServicesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ServicesController::class, 'delete'])->name('delete');
    });

    // Questions Route
    Route::prefix('faq')->name('questions.')->group(function () {
        Route::get('/', [QuestionsController::class, 'index'])->name('index');
        Route::get('/list', [QuestionsController::class, 'list'])->name('list');
        Route::get('/create', [QuestionsController::class, 'create'])->name('create');
        Route::post('/store', [QuestionsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [QuestionsController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [QuestionsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [QuestionsController::class, 'delete'])->name('delete');
    });

    // News Route
    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [AdminNewsController::class, 'index'])->name('index');
        Route::get('/list', [AdminNewsController::class, 'list'])->name('list');
        Route::get('/create', [AdminNewsController::class, 'create'])->name('create');
        Route::post('/store', [AdminNewsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminNewsController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [AdminNewsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [AdminNewsController::class, 'delete'])->name('delete');
    });
});


// Frontend Route 

Route::name('frontend.')->group(function () {
    // Dashboard Route
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Who We Are Route
    Route::name('who-we-are.')->group(function () {
        Route::get('/about-the-company', [WhoWeAreController::class, 'aboutTheCompany'])->name('about-the-company');
        Route::get('/leadership', [WhoWeAreController::class, 'leadership'])->name('leadership');
    });

    // Products Route
    Route::name('products.')->group(function () {
        Route::get('/product/{id}', [ProductsController::class, 'index'])->name('index');
    });

    // Products Route
    Route::name('news.')->group(function () {
        Route::get('/news', [NewsController::class, 'index'])->name('index');
        Route::get('/news-detail/{id}', [NewsController::class, 'detail'])->name('detail');
    });

    // Project Route
    Route::name('project.')->group(function () {
        Route::get('/project/{id}', [FrontendProjectController::class, 'index'])->name('index');
    });
});
