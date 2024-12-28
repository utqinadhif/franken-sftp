<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    if(Storage::disk('mysftp')->exists('images/rekammedis/')) {
        echo 'file found';
    } else {
        echo 'file not found';
    }
});
