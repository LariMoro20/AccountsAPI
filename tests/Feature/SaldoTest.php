<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaldoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSaldo(){
        $userData = [
            "saldo"=> ["code" =>123456]
        ];

        $response = $this->json('POST', '/graphql', $userData);
        $response
            ->assertStatus(500)
            ->assertExactJson([
                'status' => true,
            ]);


    }
}
