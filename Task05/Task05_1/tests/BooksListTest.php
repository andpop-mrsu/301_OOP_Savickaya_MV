<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Book;
use App\BooksList;

class BooksListTest extends TestCase
{
    public function testIterator()
    {
        $booksList = new BooksList();

        $book1 = new Book(1, "Book One", "Author A");
        $book2 = new Book(2, "Book Two", "Author B");

        $booksList->addBook($book1);
        $booksList->addBook($book2);

        $expected = [
            1 => $book1,
            2 => $book2
        ];

        $result = [];
        foreach ($booksList as $key => $book) {
            $result[$key] = $book;
        }

        $this->assertEquals($expected, $result);
    }

    public function testRemoveBook()
    {
        $booksList = new BooksList();

        $book1 = new Book(1, "Book One", "Author A");
        $booksList->addBook($book1);
        $booksList->removeBook(1);

        $this->assertFalse($booksList->valid());
    }
}
