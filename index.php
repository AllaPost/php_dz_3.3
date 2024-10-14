<?php

echo "<strong>Задание 1: Определение четности чисел</strong> <br>";
// Создаем массив из 5 чисел:
$numbers = [1, 2, 3, 4, 5];

// Используем цикл foreach для проверки каждого числа
foreach ($numbers as $number) {
    // Проверяем, является ли число четным
    if ($number % 2 == 0) {
        echo "Число $number - четное число<br>";
    } else {
        echo "Число $number - нечетное число<br>";
    }
}

echo "<strong>Задание 2: Подсчет положительных и отрицательных чисел</strong> <br>";

// Создаем массив
$numbers = array(-1, 3, 4, -5, 8, -9, 2);

// Задаем переменные
$positive_count = 0;
$negative_count = 0;

// Выполнение цикла foreach
foreach($numbers as $number){
    if($number > 0){
        $positive_count++;  // увеличение счётчика положительных чисел
    } else {
        $negative_count++;  // увеличение счётчика отрицательных чисел
    }
}

// Вывод результата
echo "Положительных чисел: " . $positive_count . "<br>";
echo "Отрицательных чисел: " . $negative_count . "<br>";

echo "<strong>Задание 3: Таблица умножения</strong> <br>";

// Число
$number = 5;

// Цикл for 
for ($i = 1; $i <= 10; $i++) {
    echo "$number * $i = " . ($number * $i) . "<br>";
}

echo "<strong>Задание 4: Условное отображение оценок студентов</strong> <br>";

// Создаем массив
$students = [
    "Иван" => 85,
    "Мария" => 74,
    "Алексей" => 45
];

// Используем цикл foreach
foreach ($students as $name => $score) {
    // Проверяем, сдал ли студент экзамен
    if ($score >= 50) {
        echo "$name сдал экзамен!<br>";
    } else {
        echo "$name не сдал экзамен!<br>";
    }
}

echo "<strong>Задание 5: Поиск минимального и максимального значений</strong> <br>";

// Создаем массив 
$numbers = [];
for ($i = 0; $i < 8; $i++) {
    $numbers[] = rand(1, 100);
}

// Переменные min и max
$min = $numbers[0];
$max = $numbers[0];

// Цикл foreach 
foreach ($numbers as $number) {
    if ($number < $min) {
        $min = $number; 
    }
    if ($number > $max) {
        $max = $number; 
    }
}

// Вывод минимального и максимального значения
echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";
?>