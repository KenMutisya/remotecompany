<?php

namespace App\Http\Controllers;

use App\Models\Resource;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'resources' => Resource::latest()->with('resource')->get()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }
}
