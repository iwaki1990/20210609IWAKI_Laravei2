<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SessionController;
use App\Models\Product;　//上部に追加


Route::get('/board', [BoardController::class, 'index']);
Route::get('/board/add', [BoardController::class, 'add']);
Route::post('/board/add', [BoardController::class, 'create']);
Route::get('/person', [PersonController::class, 'index']);
Route::get('/session', [SessionController::class, 'ses_get']);
Route::post('/session', [SessionController::class, 'ses_put']);
Route::get('/person', [PersonController::class, 'index']);
Route::get('/softdelete', function () {Person::find(1)->delete();
});
Route::get('softdelete/get', function() {
    $person = Person::onlyTrashed()->get();
    dd($person);
});
Route::get('softdelete/store', function() {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});
Route::get('softdelete/absolute', function() {
    $person = Person::onlyTrashed()->forceDelete();
    echo $person;
});
Route::get('uuid',function() {
    $products = Product::all();
    foreach($products as $product){
        echo $product.'<br>';
    }
});