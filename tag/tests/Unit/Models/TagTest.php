<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    public function test_slug(): void
    {
        $tag = new Tag;
        $tag->name = "projecto php";

        $this->assertEquals("projecto-php", $tag->slug);
    }
}
