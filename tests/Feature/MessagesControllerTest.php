<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessagesControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestCreate()
    {
        $response = $this->get(route('messages.create'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthCreate()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('messages.create'));

        $response->assertStatus(200)->assertViewIs('message.create');
    }
}
