<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            ['title' => 'The Great Gatsby',       'author' => 'F. Scott Fitzgerald', 'genre' => 'Fiction',    'status' => 'finished',  'rating' => 5],
            ['title' => 'To Kill a Mockingbird',   'author' => 'Harper Lee',          'genre' => 'Fiction',    'status' => 'finished',  'rating' => 5],
            ['title' => '1984',                    'author' => 'George Orwell',        'genre' => 'Dystopian', 'status' => 'finished',  'rating' => 5],
            ['title' => 'Pride and Prejudice',     'author' => 'Jane Austen',          'genre' => 'Romance',   'status' => 'finished',  'rating' => 4],
            ['title' => 'The Hobbit',              'author' => 'J.R.R. Tolkien',       'genre' => 'Fantasy',   'status' => 'finished',  'rating' => 5],
            ['title' => 'Harry Potter',            'author' => 'J.K. Rowling',         'genre' => 'Fantasy',   'status' => 'reading',   'rating' => 5],
            ['title' => 'The Alchemist',           'author' => 'Paulo Coelho',         'genre' => 'Fiction',   'status' => 'finished',  'rating' => 4],
            ['title' => 'Brave New World',         'author' => 'Aldous Huxley',        'genre' => 'Dystopian', 'status' => 'plan',      'rating' => 4],
            ['title' => 'The Catcher in the Rye',  'author' => 'J.D. Salinger',        'genre' => 'Fiction',   'status' => 'finished',  'rating' => 3],
            ['title' => 'Lord of the Flies',       'author' => 'William Golding',      'genre' => 'Fiction',   'status' => 'plan',      'rating' => 4],
            ['title' => 'Animal Farm',             'author' => 'George Orwell',        'genre' => 'Satire',    'status' => 'finished',  'rating' => 5],
            ['title' => 'The Little Prince',       'author' => 'Antoine de Exupery',   'genre' => 'Fiction',   'status' => 'finished',  'rating' => 5],
            ['title' => 'Don Quixote',             'author' => 'Miguel de Cervantes',  'genre' => 'Classic',   'status' => 'reading',   'rating' => 4],
            ['title' => 'Crime and Punishment',    'author' => 'Fyodor Dostoevsky',    'genre' => 'Classic',   'status' => 'plan',      'rating' => 5],
            ['title' => 'The Diary of a Young Girl','author' => 'Anne Frank',          'genre' => 'Biography', 'status' => 'finished',  'rating' => 5],
        ];

        DB::table('books')->insert($books);
    }
}