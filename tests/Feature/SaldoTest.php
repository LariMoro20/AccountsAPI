<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaqueTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSaque()
    {
        $response = $this->json('POST', '/graphql', ['conta' => 123456, 'valor'=>1000]);

        $response
            ->assertStatus(500)
            ->assertExactJson([
                'created' => true,
            ]);
    }
}
