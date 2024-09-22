<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected function isAuthenticated(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        return null;
    }
}