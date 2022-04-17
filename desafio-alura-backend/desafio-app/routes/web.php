<?php

use App\Http\Controllers\FileUpload;
use App\Models\File;
use Illuminate\Support\Facades\Route;

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('/upload-file', [FileUpload::class, 'createForm'])->name('createForm');

Route::get('/', function () {
    return view('/welcome');
});


