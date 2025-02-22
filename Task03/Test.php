<?php

use Task03\Book;
use Task03\BooksList;

function runTest()
{
    echo PHP_EOL . "TEST1 (String representation test)" . PHP_EOL;
    $book1 = new Book("PHP forever", ["Gates B.", "Smith J."], "O'Reily", 2020);
    $correct = "Id: 1" . PHP_EOL .
        "Название: PHP forever" . PHP_EOL .
        "Автор1: Gates B." . PHP_EOL .
        "Автор2: Smith J." . PHP_EOL .
        "Издательство: O'Reily" . PHP_EOL .
        "Год: 2020" . PHP_EOL;

    echo 'Ожидается: '  . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $book1 . PHP_EOL;
    if ((string)$book1 === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST2 (Геттеры)" . PHP_EOL;
    // Проверка геттеров
    $book1->setTitle("PHP for Beginners")
        ->setAuthors(["Smith J.", "Jones A."])
        ->setPublisher("Packt")
        ->setYear(2021);

    $correct = "PHP for Beginners";
    $result = $book1->getTitle();
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $result" . PHP_EOL;
    if ($result === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    $correct = ["Smith J.", "Jones A."];
    $result = $book1->getAuthors();
    echo "Ожидается: " . implode(", ", $correct) . PHP_EOL;
    echo "Получено: " . implode(", ", $result) . PHP_EOL;
    if ($result === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST3 (Сеттеры)" . PHP_EOL;
    $book1->setTitle("Advanced PHP");
    $correct = "Advanced PHP";
    $result = $book1->getTitle();
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: $result" . PHP_EOL;
    if ($result === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST4 (Текучий интерфейс)" . PHP_EOL;
    $book1->setTitle("PHP for Professionals")
        ->setAuthors(["Jane D.", "John W."])
        ->setPublisher("Prentice Hall")
        ->setYear(2022);

    $correct = "Id: 1" . PHP_EOL .
        "Название: PHP for Professionals" . PHP_EOL .
        "Автор1: Jane D." . PHP_EOL .
        "Автор2: John W." . PHP_EOL .
        "Издательство: Prentice Hall" . PHP_EOL .
        "Год: 2022" . PHP_EOL;

    echo 'Ожидается: '  . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $book1 . PHP_EOL;
    if ((string)$book1 === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST5 (Метод add в BooksList)" . PHP_EOL;
    $book2 = new Book("Java Basics", ["Miller L."], "McGraw-Hill", 2019);
    $booksList = new BooksList();
    $booksList->add($book1)->add($book2);
    $correct = $book2;
    $result = $booksList->get(1);
    echo 'Ожидается: '  . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $result . PHP_EOL;
    if ((string)$result === (string)$correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST6 (Метод count в BooksList)" . PHP_EOL;
    $correct = 2;
    $result = $booksList->count();
    echo 'Ожидается: '  . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $result . PHP_EOL;
    if ($result === $correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST7 (Метод get в BooksList)" . PHP_EOL;
    $correct = $book1;
    $result = $booksList->get(0);
    echo 'Ожидается: '  . PHP_EOL . $correct . PHP_EOL;
    echo 'Получено: ' . PHP_EOL . $result . PHP_EOL;
    if ((string)$result === (string)$correct) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST8 (Метод store)" . PHP_EOL;
    $booksList->store('books_list.txt');
    if (file_exists('books_list.txt')) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }

    echo PHP_EOL . "TEST9 (Метод load)" . PHP_EOL;
    $booksListNew = new BooksList();
    $booksListNew->load('books_list.txt');
    if ($booksListNew->get(0) == $booksList->get(0)) {
        echo "Тест пройден" . PHP_EOL;
    } else {
        echo "Тест НЕ ПРОЙДЕН" . PHP_EOL;
    }
}
