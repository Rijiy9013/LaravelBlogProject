<?php

use App\Http\Controllers\Admin\Category\CreateCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;
use App\Http\Controllers\Admin\Category\EditCategoryController;
use App\Http\Controllers\Admin\Category\IndexCategoryController;
use App\Http\Controllers\Admin\Category\ShowCategoryController;
use App\Http\Controllers\Admin\Category\StoreCategoryController;
use App\Http\Controllers\Admin\Category\UpdateCategoryController;
use App\Http\Controllers\Admin\Main\IndexAdminController;
use App\Http\Controllers\Admin\Post\CreatePostController;
use App\Http\Controllers\Admin\Post\DeletePostController;
use App\Http\Controllers\Admin\Post\EditPostController;
use App\Http\Controllers\Admin\Post\IndexPostController;
use App\Http\Controllers\Admin\Post\ShowPostController;
use App\Http\Controllers\Admin\Post\StorePostController;
use App\Http\Controllers\Admin\Post\UpdatePostController;
use App\Http\Controllers\Admin\Tag\CreateTagController;
use App\Http\Controllers\Admin\Tag\DeleteTagController;
use App\Http\Controllers\Admin\Tag\EditTagController;
use App\Http\Controllers\Admin\Tag\IndexTagController;
use App\Http\Controllers\Admin\Tag\ShowTagController;
use App\Http\Controllers\Admin\Tag\StoreTagController;
use App\Http\Controllers\Admin\Tag\UpdateTagController;
use App\Http\Controllers\Admin\User\CreateUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\IndexUserController;
use App\Http\Controllers\Admin\User\ShowUserController;
use App\Http\Controllers\Admin\User\StoreUserController;
use App\Http\Controllers\Admin\User\UpdateUserController;
use App\Http\Controllers\CheckAuthController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Personal\Category\PersonalCreateCategoryController;
use App\Http\Controllers\Personal\Category\PersonalDeleteCategoryController;
use App\Http\Controllers\Personal\Category\PersonalEditCategoryController;
use App\Http\Controllers\Personal\Category\PersonalIndexCategoryController;
use App\Http\Controllers\Personal\Category\PersonalShowCategoryController;
use App\Http\Controllers\Personal\Category\PersonalStoreCategoryController;
use App\Http\Controllers\Personal\Category\PersonalUpdateCategoryController;
use App\Http\Controllers\Personal\Main\IndexPersonalController;
use App\Http\Controllers\Personal\Post\PersonalCreatePostController;
use App\Http\Controllers\Personal\Post\PersonalDeletePostController;
use App\Http\Controllers\Personal\Post\PersonalEditPostController;
use App\Http\Controllers\Personal\Post\PersonalIndexPostController;
use App\Http\Controllers\Personal\Post\PersonalShowPostController;
use App\Http\Controllers\Personal\Post\PersonalStorePostController;
use App\Http\Controllers\Personal\Post\PersonalUpdatePostController;
use App\Http\Controllers\Personal\Tag\PersonalCreateTagController;
use App\Http\Controllers\Personal\Tag\PersonalDeleteTagController;
use App\Http\Controllers\Personal\Tag\PersonalEditTagController;
use App\Http\Controllers\Personal\Tag\PersonalIndexTagController;
use App\Http\Controllers\Personal\Tag\PersonalShowTagController;
use App\Http\Controllers\Personal\Tag\PersonalStoreTagController;
use App\Http\Controllers\Personal\Tag\PersonalUpdateTagController;
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

Route::name('main.')->group(function() {
    Route::get('/', IndexController::class)->name('index');
});

Route::middleware(['auth', 'creator'])->group(function(){
    Route::name('checkAuth')->group(function() {
        Route::get('/checkAuth', CheckAuthController::class);
    });
});

Route::prefix('posts')->group(function (){
    Route::name('post.')->group(function() {
        Route::get('/', \App\Http\Controllers\Post\IndexPostController::class)->name('indexP');
        Route::get('/{post}', \App\Http\Controllers\Post\ShowPostController::class)->name('showP');
    });
});

//Route::middleware(['auth', 'creator'])->group(function(){
//    Route::prefix('personal')->group(function(){
//        Route::name('personal')->group(function(){
//            Route::get('/', IndexPersonalController::class)->name('.main.index');
//
//        });
//        Route::prefix('categories')->group(function (){
//            Route::name('category.personal')->group(function (){
//                Route::get('/', PersonalIndexCategoryController::class)->name('.index');
//                Route::get('/create', PersonalCreateCategoryController::class)->name('.create');
//                Route::post('/', PersonalStoreCategoryController::class)->name('.store');
//                Route::get('/{category}', PersonalShowCategoryController::class)->name('.show');
//                Route::get('/{category}/edit', PersonalEditCategoryController::class)->name('.edit');
//                Route::patch('/{category}', PersonalUpdateCategoryController::class)->name('.update');
//                Route::delete('/{category}', PersonalDeleteCategoryController::class)->name('.delete');
//            });
//        });
//        Route::prefix('tags')->group(function (){
//            Route::name('tag.personal')->group(function (){
//                Route::get('/', PersonalIndexTagController::class)->name('.index');
//                Route::get('/create', PersonalCreateTagController::class)->name('.create');
//                Route::post('/', PersonalStoreTagController::class)->name('.store');
//                Route::get('/{tag}', PersonalShowTagController::class)->name('.show');
//                Route::get('/{tag}/edit', PersonalEditTagController::class)->name('.edit');
//                Route::patch('/{tag}', PersonalUpdateTagController::class)->name('.update');
//                Route::delete('/{tag}', PersonalDeleteTagController::class)->name('.delete');
//            });
//        });
//        Route::prefix('posts')->group(function (){
//            Route::name('post.personal')->group(function (){
//                Route::get('/', PersonalIndexPostController::class)->name('.index');
//                Route::get('/create', PersonalCreatePostController::class)->name('.create');
//                Route::post('/', PersonalStorePostController::class)->name('.store');
//                Route::get('/{post}', PersonalShowPostController::class)->name('.show');
//                Route::get('/{post}/edit', PersonalEditPostController::class)->name('.edit');
//                Route::patch('/{post}', PersonalUpdatePostController::class)->name('.update');
//                Route::delete('/{post}', PersonalDeletePostController::class)->name('.delete');
//            });
//        });
//    });
//});


Route::middleware(['auth'])->group(function(){
    Route::prefix('personal')->group(function (){
        Route::name('main')->group(function() {
            Route::get('/', IndexAdminController::class);
        });
        Route::prefix('categories')->group(function (){
            Route::name('category')->group(function (){
                Route::get('/', IndexCategoryController::class)->name('.index');
                Route::get('/create', CreateCategoryController::class)->name('.create');
                Route::post('/', StoreCategoryController::class)->name('.store');
                Route::get('/{category}', ShowCategoryController::class)->name('.show');
                Route::get('/{category}/edit', EditCategoryController::class)->name('.edit');
                Route::patch('/{category}', UpdateCategoryController::class)->name('.update');
                Route::delete('/{category}', DeleteCategoryController::class)->name('.delete');
            });
        });
        Route::prefix('tags')->group(function (){
            Route::name('tag')->group(function (){
                Route::get('/', IndexTagController::class)->name('.index');
                Route::get('/create', CreateTagController::class)->name('.create');
                Route::post('/', StoreTagController::class)->name('.store');
                Route::get('/{tag}', ShowTagController::class)->name('.show');
                Route::get('/{tag}/edit', EditTagController::class)->name('.edit');
                Route::patch('/{tag}', UpdateTagController::class)->name('.update');
                Route::delete('/{tag}', DeleteTagController::class)->name('.delete');
            });
        });
        Route::prefix('posts')->group(function (){
            Route::name('post')->group(function (){
                Route::get('/', IndexPostController::class)->name('.index');
                Route::get('/create', CreatePostController::class)->name('.create');
                Route::post('/', StorePostController::class)->name('.store');
                Route::get('/{post}', ShowPostController::class)->name('.show');
                Route::get('/{post}/edit', EditPostController::class)->name('.edit');
                Route::patch('/{post}', UpdatePostController::class)->name('.update');
                Route::delete('/{post}', DeletePostController::class)->name('.delete');
            });
        });
        Route::middleware(['admin'])->group(function(){
            Route::prefix('users')->group(function (){
                Route::name('user')->group(function (){
                    Route::get('/', IndexUserController::class)->name('.index');
                    Route::get('/create', CreateUserController::class)->name('.create');
                    Route::post('/', StoreUserController::class)->name('.store');
                    Route::get('/{user}', ShowUserController::class)->name('.show');
                    Route::get('/{user}/edit', EditUserController::class)->name('.edit');
                    Route::patch('/{user}', UpdateUserController::class)->name('.update');
                    Route::delete('/{user}', DeleteUserController::class)->name('.delete');
                });
            });
        });
    });
});


Auth::routes();

