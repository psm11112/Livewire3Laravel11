<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\UserList;
use App\Livewire\Admin\User\PostUser;




Route::get('/',\App\Livewire\Frontend\Home::class);




Route::prefix('admin')->group(function () {
    Route::get('/', Dashboard::class)->name('admin.dashboard')->middleware(['auth', 'verified']);
    Route::get('/user', UserList::class)->name('admin.user')->middleware(['auth', 'verified']);
    Route::get('/user/add', PostUser::class)->name('admin.user.add')->middleware(['auth', 'verified']);
});






require __DIR__.'/auth.php';
