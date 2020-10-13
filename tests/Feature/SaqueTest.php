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
    public function testSaque(){
        $userData = [
            "code" =>123456,
            "valor" =>200
        ];

        $response = $this->json('POST', '/graphql', ['accounts' => [ 'name', 'balance', 'code', 'status']]);
        $response
            ->assertStatus(500)
            ->assertExactJson([
                'created' => true,
            ]);


    }
}
