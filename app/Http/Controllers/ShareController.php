<?php

namespace App\Http\Controllers;

use App\Share;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShareRequest;

class ShareController extends Controller
{
    public function show($id)
    {
        if (! $share = Share::find($id)) {
            abort(404);
        }

        app()->setLocale($share->locale);

        return view()->make('pages.share')
                    ->withShare($share);
    }

    public function store(StoreShareRequest $request)
    {
        $share = Share::create($request->all());

        return response()->json([
            'url' => route('shares.show', $share->id)
        ]);
    }
}
