<?php

use Task02\Vector;

function runTest()
{
    $v1 = new Vector(1, 2, 3);
    $correct = "(1; 2; 3)";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $v1 . PHP_EOL;
    echo ($v1 == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;

    $v2 = new Vector(1, 4, -2);

    $v3 = $v1->add($v2);
    $correct = "(2; 6; 1)";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $v3 . PHP_EOL;
    echo ($v3 == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;

    $v4 = $v1->sub($v2);
    $correct = "(0; -2; 5)";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $v4 . PHP_EOL;
    echo ($v4 == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;

    $v5 = $v1->product(2);
    $correct = "(2; 4; 6)";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $v5 . PHP_EOL;
    echo ($v5 == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;

    $scalar = $v1->scalarProduct($v2);
    $correct = 3;
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $scalar . PHP_EOL;
    echo ($scalar == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;

    $v6 = $v1->vectorProduct($v2);
    $correct = "(-16; 5; 2)";
    echo "Ожидается: $correct" . PHP_EOL;
    echo "Получено: " . $v6 . PHP_EOL;
    echo ($v6 == $correct ? "Тест пройден" : "Тест НЕ ПРОЙДЕН") . PHP_EOL . PHP_EOL;
}
