<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_access_books()
    {
        $response = $this->get(route('books.index'));
        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_view_books_page()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('books.index'));
        $response->assertStatus(200);
    }

    public function test_user_can_add_a_book()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('books.store'), [
            'title'  => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'genre'  => 'Fiction',
            'status' => 'Want To Read',
            'rating' => 8,
            'review' => 'A classic.',
        ]);

        $response->assertRedirect(route('books.index'));
        $this->assertDatabaseHas('books', ['title' => 'The Great Gatsby', 'user_id' => $user->id]);
    }

    public function test_book_requires_title_and_author()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('books.store'), [
            'title'  => '',
            'author' => '',
            'status' => 'Finished',
        ]);

        $response->assertSessionHasErrors(['title', 'author']);
    }

    public function test_user_can_update_their_book()
    {
        $user = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user->id, 'title' => 'Old Title']);

        $this->actingAs($user)->put(route('books.update', $book), [
            'title'  => 'New Title',
            'author' => $book->author,
            'status' => $book->status,
        ]);

        $this->assertDatabaseHas('books', ['id' => $book->id, 'title' => 'New Title']);
    }

    public function test_user_cannot_edit_another_users_book()
    {
        $user  = User::factory()->create();
        $other = User::factory()->create();
        $book  = Book::factory()->create(['user_id' => $other->id]);

        $response = $this->actingAs($user)->put(route('books.update', $book), [
            'title'  => 'Hacked',
            'author' => 'Hacker',
            'status' => 'Finished',
        ]);

        $response->assertForbidden();
    }

    public function test_user_can_delete_their_book()
    {
        $user = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user->id]);

        $this->actingAs($user)->delete(route('books.destroy', $book));

        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }

    public function test_user_cannot_delete_another_users_book()
    {
        $user  = User::factory()->create();
        $other = User::factory()->create();
        $book  = Book::factory()->create(['user_id' => $other->id]);

        $response = $this->actingAs($user)->delete(route('books.destroy', $book));

        $response->assertForbidden();
        $this->assertDatabaseHas('books', ['id' => $book->id]);
    }
}
