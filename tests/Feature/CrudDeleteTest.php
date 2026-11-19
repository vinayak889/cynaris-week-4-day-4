<?php

namespace Tests\Feature;

use Tests\TestCase;

class CrudDeleteTest extends TestCase
{
    public function test_delete_endpoint_requires_authentication_or_returns_expected_response(): void
    {
        // Adjust URI/method and expected response to match your app's delete route.
        $response = $this->delete('/posts/1');

        // A protected delete route should typically redirect guests to login.
        $response->assertRedirect('/login');
    }
}
