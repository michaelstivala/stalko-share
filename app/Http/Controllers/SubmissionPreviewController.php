<?php

namespace App\Http\Controllers;

use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubmissionRequest;

class SubmissionPreviewController extends Controller
{
    public function store(StoreSubmissionRequest $request)
    {
        app()->setLocale($request->locale);
        
        return response()->json([
            'preview' => sprintf(
                "%s<br/>%s<br/>%s",
                trans('stalko.salutation', ['name' => $request->name]),
                $request->message,
                trans('stalko.call-to-action')
            )
        ]);
    }
}
