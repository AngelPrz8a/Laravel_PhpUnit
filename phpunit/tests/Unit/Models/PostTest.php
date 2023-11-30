<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    
    public function test_set_name_in_lowercase(): void
    {
        $post = new Post();
        $post->name = "Projecto";
        $this->assertEquals("projecto",$post->name);
    }
    
    public function test_get_slug(){
        $post = new Post();
        $post->name = "Projecto web si";
        $this->assertEquals("projecto-web-si",$post->slug);
    }

    public function test_get_href(){
        $post= new Post;
        $post->name="Projecto web si";
        $this->assertEquals("blog/projecto-web-si",$post->getHref());
    }
}
