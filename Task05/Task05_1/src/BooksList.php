<?php

namespace App;

use Iterator;

class BooksList implements Iterator
{
    private array $books = [];
    private int $position = 0;

    public function addBook(Book $book): void
    {
        $this->books[$book->getId()] = $book;
    }

    public function removeBook(int $id): void
    {
        unset($this->books[$id]);
    }

    public function current(): mixed
    {
        return array_values($this->books)[$this->position] ?? null;
    }

    public function key(): mixed
    {
        return array_keys($this->books)[$this->position] ?? null;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset(array_values($this->books)[$this->position]);
    }
}
