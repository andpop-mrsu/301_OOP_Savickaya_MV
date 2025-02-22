<?php

namespace Task03;

class Book
{
    private static $counter = 1;
    private $id;
    private $title;
    private $authors = [];
    private $publisher;
    private $year;

    public function __construct($title, array $authors, $publisher, $year)
    {
        $this->id = self::$counter++;
        $this->title = $title;
        $this->authors = $authors;
        $this->publisher = $publisher;
        $this->year = $year;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthors(array $authors)
    {
        $this->authors = $authors;
        return $this;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthors()
    {
        return $this->authors;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        $authorsStr = '';
        foreach ($this->authors as $key => $author) {
            $authorsStr .= "Автор" . ($key + 1) . ": $author" . PHP_EOL;
        }

        return "Id: {$this->id}" . PHP_EOL .
            "Название: {$this->title}" . PHP_EOL .
            $authorsStr .
            "Издательство: {$this->publisher}" . PHP_EOL .
            "Год: {$this->year}" . PHP_EOL;
    }
}
