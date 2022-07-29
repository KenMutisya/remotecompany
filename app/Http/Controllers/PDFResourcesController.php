<?php

namespace App\Http\Controllers;

use App\Models\PDFResource;
use App\Models\Resource;
use Illuminate\Http\Request;

class PDFResourcesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request,PDFResource $pdf)
    {
        $this->validate($request,[
            'title' => 'required',
            'pdfFile' => 'required|mimes:pdf',
        ]);

        $pdf->file_path = $request->pdfFile->store('pdf','public');
        $pdf->save();

        (new Resource(['title'=>$request->title]))->resource()->associate($pdf)->save();

        return response()->json($pdf);
    }


    public function show(PDFResource $PDFResource)
    {
    }

    public function edit(PDFResource $PDFResource)
    {
    }

    public function update(Request $request, PDFResource $PDFResource)
    {
    }

    public function destroy(PDFResource $PDFResource)
    {
    }
}
