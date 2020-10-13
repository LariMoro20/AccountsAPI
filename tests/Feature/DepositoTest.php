<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepositoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDeposito(){
        $userData = [
            "code" =>123456,
            "valor" =>200
        ];

        $response = $this->json('POST', '/graphql', $userData ,['depositar' => [ 'name', 'balance', 'code', 'status']]);
        $response
            ->assertStatus(500)
            ->assertExactJson([
                'status' => true,
            ]);


    }
}
