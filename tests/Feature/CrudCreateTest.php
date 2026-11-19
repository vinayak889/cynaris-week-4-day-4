<?php

namespace Tests\Feature;

use Tests\TestCase;

class CrudCreateTest extends TestCase
{
    public function test_create_form_or_endpoint_is_available(): void
    {
        // Adapt this URI to the create form or API endpoint in your application.
        $response = $this->get('/posts/create');

        $response->assertStatus(200);
    }
}
