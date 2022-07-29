<?php

namespace Tests\Feature;

use App\Models\LinkResource;
use App\Models\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LinkResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_save_a_link_resource()
    {
        $response = $this->post(route('linkresource.store'),[
            'title' => 'Test Link',
            'url' => 'https://www.google.com',
            'openinnewtab' => true,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas(LinkResource::class,[
            'link' => 'https://www.google.com',
            'openinnewtab' => true,
        ]);
        $this->assertDatabaseHas(Resource::class,[
            'title' => 'Test Link',
        ]);
    }
}
