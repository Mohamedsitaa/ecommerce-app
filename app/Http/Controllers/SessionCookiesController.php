<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SessionCookiesController extends Controller
{
    public function index(Request $request)
    {
        return view('session-cookie', [
            'username' => $request->session()->get('username'),
            'visits' => $request->session()->get('visits', 0),
            'theme' => $request->cookie('theme', 'light'),
        ]);
    }

    public function saveSession(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:100'],
        ]);

        $request->session()->put('username', $validated['username']);
        $request->session()->increment('visits');

        return redirect()->route('session-cookie.index')
            ->with('success', 'Session Saved Successfully!');
    }

    public function saveCookie(Request $request)
    {
        return redirect()->route('session-cookie.index')
            ->withCookie(cookie('theme', 'dark', 60 * 24));
    }

    public function deleteData(Request $request)
    {
        $request->session()->forget(['username', 'visits']);

        return redirect()->route('session-cookie.index')
            ->withCookie(Cookie::forget('theme'))
            ->with('success', 'Session and cookie cleared');
    }
}
