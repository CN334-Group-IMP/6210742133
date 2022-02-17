<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $admin = auth()->user()->admin();
        return view('dashboard', compact('admin'));
    }
}