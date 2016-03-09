<?php

namespace App\Http\Controllers;

use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view()->make('pages.submission')
                    ->withSubmission(Submission::getDefaultSubmission());
    }
}
