<?php

namespace App\Http\Controllers;

use App\Models\LinkResource;
use App\Models\Resource;
use Illuminate\Http\Request;

class LinkResourcesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request, LinkResource $link)
    {
        $this->validate($request, [
            'title'        => 'required',
            'url'         => ['required','url'],
            'openinnewtab' => 'sometimes',
        ]);

        $link->link = $request->url;
        $link->openinnewtab = $request->openinnewtab ?: false;
        $link->save();

        (new Resource(['title' => $request->title]))->resource()->associate($link)->save();

        return response($link);
    }

    public function show(LinkResource $linkResource)
    {
    }

    public function edit(LinkResource $linkResource)
    {
    }

    public function update(Request $request, LinkResource $linkResource)
    {
    }

    public function destroy(LinkResource $linkResource)
    {
    }
}
