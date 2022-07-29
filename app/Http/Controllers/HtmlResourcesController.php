<?php

namespace App\Http\Controllers;

use App\Models\HtmlResource;
use App\Models\Resource;
use Illuminate\Http\Request;

class HtmlResourcesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request, HtmlResource $htmlResource)
    {
        $this->validate($request, [
            'title'              => ['required'],
            'snippetdescription' => ['required'],
            'snippet'            => ['required'],
        ]);

        $htmlResource->snippet_description = $request->snippetdescription;
        $htmlResource->snippet = $request->snippet;
        $htmlResource->save();

        (new Resource(['title' => $request->title]))->resource()->associate($htmlResource)->save();

        return response()->json($htmlResource);
    }

    public function show(HtmlResource $htmlResource)
    {
    }

    public function edit(HtmlResource $htmlResource)
    {
    }

    public function update(Request $request, HtmlResource $htmlResource)
    {
    }

    public function destroy(HtmlResource $htmlResource)
    {
    }
}
