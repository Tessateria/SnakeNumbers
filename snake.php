<?php

$size = $argv[1];
$currentNumber = 1;
$picture = [];
$validateInt = filter_var($size, FILTER_VALIDATE_INT);

if (!$validateInt || ($size <= 0)) {
    echo "Введите число больше 0 цифрами " . PHP_EOL;
} else {
    for ($i = 0; $i < $size; $i++) {
        if ($i % 2) {
            for ($j = ($size - 1); $j >= 0; $j--) {
                $picture[$i][$j] = $currentNumber;
                $currentNumber++;
            }
        } else {
            for ($j = 0; $j < $size; $j++) {
                $picture[$i][$j] = $currentNumber;
                $currentNumber++;
            }
        }
    }

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            echo $picture[$i][$j] . ' ';
        }
        echo PHP_EOL;
    }
}
