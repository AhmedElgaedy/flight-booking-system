<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;


class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $redirect = $this->isAuthenticated($request);
        if ($redirect) {
            return $redirect;
        }

        return view('home');
    }
}
