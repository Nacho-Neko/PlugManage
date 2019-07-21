<?php

namespace App\Http\Controllers\Api;

use App\Models\Token;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    //
    public function info()
    {
        $user = Auth::id();
        return $user;
    }
}