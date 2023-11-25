<?php

use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $temp = Member::find(1);
    return $temp->interviewer_comment;
});
