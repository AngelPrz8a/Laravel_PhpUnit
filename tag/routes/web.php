<?php

use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        "tags"=>Tag::get()
    ]);
});

Route::post("/tags",[TagController::class,"store"]);
Route::delete("tags/{id}",[TagController::class,"destroy"]);