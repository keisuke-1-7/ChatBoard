<?php

namespace Tests\Feature\Database;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use App\Post;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        // $this->assertTrue(
            // Schema::hasColumns('posts', [
            //     'id', 'title', 'body'
            // ]),
            // 1
        // );

            $post = new Post();
            $post->title = 'TestTitle';
            $post->body = 'TestBody';
            $savePost = $post->save();

            $this->assertTrue($savePost);
    }
}
