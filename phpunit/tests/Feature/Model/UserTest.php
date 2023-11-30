<?php

namespace Tests\Feature\Model;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_user(): void
    {

        User::factory()->create([
            "email"=>"angel@gmail.com"
        ]);
        
        $this->assertDatabaseHas("users",[
            "email"=>"angel@gmail.com"
        ]);

        $this->assertDatabaseMissing("users",[
            "email"=>"no@gmail.com"
        ]);
    }
}
