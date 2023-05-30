<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostListControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_TOPページで、ブログ一覧が表示される()
    {
        // $post1 = Post::factory()->create();
        // $post2 = Post::factory()->create();

        $this->withoutExceptionHandling();
        $this->get('/')
            ->assertOk();
            // ->assertSee($post1->title)
            // ->assertSee($post2->title);
    }
}
