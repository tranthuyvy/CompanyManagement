<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function () {
//     $temp = CandidateSkill::find(1);
//     return $temp->skill;
// });

Route::resource('/member', MemberController::class);
