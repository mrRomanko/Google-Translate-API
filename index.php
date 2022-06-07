<?php

// Підключаємо перекладач
require_once 'GoogleTranslateForFree.php';

// Мова оригіналу
$source = 'en';
// Мова на яку перекладаємо
$target = 'uk';
// Підключення стороннього API для виводу тексту англійською (просто для прикладу)
$text = file_get_contents("http://numbersapi.com/".date('m')."/".date('d'));

// Обробка
$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $text);

// Результат
echo $result;
