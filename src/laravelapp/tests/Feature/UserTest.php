<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);

    }
    public function testStore()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);

    }

    public function testShow()
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->dump();
            // ->asssertJson([
            //     "id" => 1,
            //     "name" => "Yamada",
            //     "sex" => "female",
            //     "email" => "yamada@example.com",
            //     "prefecture" => "Tokyo",
            //     "birthday" => "2000-11-11",
            //     "email_verified_at" => null,
            //     "created_at" => "2022-05-11 06:47:01",
            //     "updated_at" => "2022-05-11 06:47:01"
            // ]);
    }

    public function testUpdate()
    {
        $response = $this->get('/api/users/4');

        $response->assertStatus(200);

    }
    public function testDestroy()
    {
        $response = $this->get('/api/users/5');

        $response->assertStatus(200);

    }
}
