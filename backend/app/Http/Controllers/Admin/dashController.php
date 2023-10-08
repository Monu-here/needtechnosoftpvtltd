<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashController extends Controller
{
    public function index() {
        $user = Auth::user();
        if ($user) {
            # code...
            return view('back.dashboard',compact('user'));
        }
    }
}
