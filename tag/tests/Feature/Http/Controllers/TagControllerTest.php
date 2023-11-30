<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store(): void
    {
        $this
        ->post("tags",["name"=>"PHP"])
        ->assertRedirect("/");
        $this
        ->assertDatabaseHas("tags",["name"=>"PHP"]);
    }

    public function test_destroy(){
        $tag = Tag::factory()->create();

        $this
        ->delete("tags/$tag->id")
        ->assertRedirect("/");

        $this
        ->assertDatabaseMissing("tags",["id"=>$tag->id]);

    }

    public function test_validate(){
        $this
        ->post("tags",["name"=>""])
        ->assertSessionHasErrors("name");
    }
}
