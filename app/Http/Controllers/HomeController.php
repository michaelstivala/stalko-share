<?php

namespace App\Http\Controllers;

use App\Share;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view()->make('pages.share')
                    ->withShare(Share::getDefaultShare());
    }
}
