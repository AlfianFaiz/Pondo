<?php

namespace App\Http\Controllers;

class AdminRouteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }
}
