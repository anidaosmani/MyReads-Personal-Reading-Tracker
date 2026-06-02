<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_books_page()
    {
        $response = $this->get('/books');
        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_create_a_book()
    {
        $response = $this->post('/books', [
            'title'  => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'genre'  => 'Fiction',
            'status' => 'finished',
            'rating' => 5,
        ]);
        $response->assertStatus(201)
                 ->orAssertRedirect();
    }

    /** @test */
    public function book_requires_a_title()
    {
        $response = $this->post('/books', [
            'title'  => '',
            'author' => 'Some Author',
        ]);
        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function book_requires_an_author()
    {
        $response = $this->post('/books', [
            'title'  => 'Some Title',
            'author' => '',
        ]);
        $response->assertSessionHasErrors('author');
    }

    /** @test */
    public function user_can_delete_a_book()
    {
        $response = $this->delete('/books/1');
        $response->assertStatus(200)
                 ->orAssertRedirect();
    }

    /** @test */
    public function guest_cannot_access_books()
    {
        $response = $this->get('/books');
        $response->assertStatus(200)
                 ->orAssertRedirect('/login');
    }
}