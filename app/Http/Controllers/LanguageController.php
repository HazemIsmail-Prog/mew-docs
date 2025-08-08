<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        session()->put('language', $request->language);
        return response()->json(['success' => true]);
    }

    public function getLanguage()
    {
        return response()->json(['language' => session()->get('language') ?? config('app.fallback_locale')]);
    }
}
