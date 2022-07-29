<?php

namespace Tests\Feature;

use App\Models\PDFResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PDFResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_save_a_pdf_resource()
    {
        $response = $this->post(route('pdfresource.store'),[
            'title' => 'Test PDF',
            'pdfFile' => UploadedFile::fake()->create('test.pdf',10),
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseCount('pdf_resources',1);
        $this->assertDatabaseCount('resources',1);
    }
}
