<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/sgroup', [Controller\Site::class, 'sgroup'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/nstud', [Controller\Site::class, 'nstud'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/sdis', [Controller\Site::class, 'sdis'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/strStud', [Controller\Site::class, 'strStud'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/izm', [Controller\Site::class, 'izm'])
    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/search', [Controller\Site::class, 'search']);
Route::add(['GET', 'POST'], '/search_usp', [Controller\Site::class, 'search_usp']);


