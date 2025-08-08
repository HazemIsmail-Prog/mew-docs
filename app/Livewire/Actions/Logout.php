<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout
{
    /**
     * Log the current user out of the application.
     */
    public function __invoke()
    {
        Auth::guard('web')->logout();

        $locale = session()->get('language') ?? config('app.fallback_locale');

        Session::invalidate();
        Session::regenerateToken();

        session()->put('language', $locale);

        return redirect('/');
    }
}
