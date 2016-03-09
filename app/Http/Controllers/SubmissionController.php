<?php

namespace App\Http\Controllers;

use App\Submission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubmissionRequest;

class SubmissionController extends Controller
{
    public function show($id)
    {
        if (! $submission = Submission::find($id)) {
            abort(404);
        }

        app()->setLocale($submission->locale);

        return view()->make('pages.submission')
                    ->withSubmission($submission);
    }

    public function store(StoreSubmissionRequest $request)
    {
        $submission = Submission::create($request->all());

        return response()->json([
            'url' => route('submissions.show', $submission->id)
        ]);
    }
}
