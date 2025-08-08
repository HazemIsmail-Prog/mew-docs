<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\QuickTextController;
use App\Http\Controllers\AttachmentController;

Route::redirect('/', 'dashboard')->name('home');

Route::controller(LanguageController::class)->group(function () {
    Route::get('language', 'getLanguage');
    Route::post('language', 'setLanguage');
});


Route::middleware(['auth', 'active.user'])->group(function () {
    
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(UserController::class)->group(function () {
        Route::put('users/{user}/toggle-status', 'toggleStatus');
        Route::get('users', 'index')->name('users');
        Route::post('users', 'store')->name('users.store');
        Route::put('users/{user}', 'update')->name('users.update');
        Route::delete('users/{user}', 'destroy')->name('users.destroy');
    });

    Route::controller(RoleController::class)->group(function () {
        Route::get('roles', 'index')->name('roles');
        Route::post('roles', 'store')->name('roles.store');
        Route::put('roles/{role}', 'update')->name('roles.update');
        Route::delete('roles/{role}', 'destroy')->name('roles.destroy');
    });

    Route::controller(PermissionController::class)->group(function () {
        Route::get('permissions', 'index')->name('permissions');
        Route::post('permissions', 'store')->name('permissions.store');
        Route::put('permissions/{permission}', 'update')->name('permissions.update');
        Route::delete('permissions/{permission}', 'destroy')->name('permissions.destroy');
    });

    Route::controller(ContractController::class)->group(function () {
        Route::get('contracts', 'index')->name('contracts');
        Route::post('contracts', 'store')->name('contracts.store');
        Route::put('contracts/{contract}', 'update')->name('contracts.update');
        Route::delete('contracts/{contract}', 'destroy')->name('contracts.destroy');
    });

    Route::controller(StakeholderController::class)->group(function () {
        Route::get('stakeholders', 'index')->name('stakeholders');
        Route::post('stakeholders', 'store')->name('stakeholders.store');
        Route::put('stakeholders/{stakeholder}', 'update')->name('stakeholders.update');
        Route::delete('stakeholders/{stakeholder}', 'destroy')->name('stakeholders.destroy');
    });

    Route::controller(TagController::class)->group(function () {
        Route::get('tags', 'index')->name('tags');
        Route::post('tags', 'store')->name('tags.store');
        Route::put('tags/{tag}', 'update')->name('tags.update');
        Route::delete('tags/{tag}', 'destroy')->name('tags.destroy');
    });

    Route::controller(DocumentController::class)->group(function () {
        Route::get('documents', 'index')->name('documents');
        Route::post('documents', 'store')->name('documents.store');
        Route::put('documents/{document}', 'update')->name('documents.update');
        Route::delete('documents/{document}', 'destroy')->name('documents.destroy');
        Route::get('documents/{document}', 'show')->name('documents.show');
    });

    Route::controller(StepController::class)->group(function () {
        Route::put('steps/{step}/toggle-completion', 'toggleCompletion')->name('steps.toggle-completion');
        Route::put('steps/{step}', 'update')->name('steps.update');
        Route::put('steps/{step}/update-order', 'updateOrder')->name('steps.update-order');
        Route::get('documents/{document}/steps', 'index')->name('steps');
        Route::post('documents/{document}/steps', 'store')->name('steps.store');
        Route::delete('documents/{document}/steps/{step}', 'destroy')->name('steps.destroy');
    });

    Route::controller(AttachmentController::class)->group(function () {
        Route::put('attachments/{attachment}', 'update')->name('attachments.update');
        Route::get('documents/{document}/attachments', 'index')->name('attachments');
        Route::post('documents/{document}/attachments', 'store')->name('attachments.store');
        Route::delete('documents/{document}/attachments/{attachment}', 'destroy')->name('attachments.destroy');
    });

    Route::controller(LetterController::class)->group(function () {
        Route::get('letters', 'index')->name('letters');
        Route::post('letters', 'store')->name('letters.store');
        Route::put('letters/{letter}', 'update')->name('letters.update');
        Route::delete('letters/{letter}', 'destroy')->name('letters.destroy');
        Route::get('letters/{letter}/pdf', 'pdf')->name('letters.pdf');
    });

    Route::controller(QuickTextController::class)->group(function () {
        Route::get('quick-texts', 'index')->name('quick-texts');
        Route::post('quick-texts', 'store')->name('quick-texts.store');
        Route::put('quick-texts/{quickText}', 'update')->name('quick-texts.update');
        Route::delete('quick-texts/{quickText}', 'destroy')->name('quick-texts.destroy');
    });

    

    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
