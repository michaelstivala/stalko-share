<?php

namespace App\Http\Controllers;

use App\Share;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShareRequest;

class SharePreviewController extends Controller
{
    public function store(StoreShareRequest $request)
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
