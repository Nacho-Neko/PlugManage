<?php

namespace App\Http\Controllers\Base;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    //

    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function show()
    {

        return view('base.index')
            ->with('user');
    }


}
