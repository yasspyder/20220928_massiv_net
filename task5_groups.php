<?php
$studentsList = [
    'ДСК2000' => [
        'Смирнов Евгений Олегович' => 5,
        'Иванов Даниил Ярославович' => 4,
        'Петров Владимир Петрович' => 3,
        'Сидоров Владислав Геннадьевич' => 4,
        'Утёсов Олег Иванович' => 5,
        'Мамин Игорь Аркадьевич' => 3,
        'Пиминов Евгений Николаевич' => 2,
        'Грицко Зинаида Карповна' => 4
    ],
    'ИТА2160' => [
        'Бобров Андрей Алексеевич' => 3,
        'Артамонов Назар Андреевич' => 5,
        'Улюкаев Станислав Петрович' => 4,
        'Нырко Платон Вадимович' => 5,
        'Калинин Агат Себастьянович' => 4,
        'Никифорова Юлия Вениаминовна' => 3,
        'Петьков Василий Иванович' => 5
    ]

];

$exclude = [];
foreach ($studentsList as $group => $groups) {
    $avergrade[$group] = array_sum($groups) / count($groups);

    foreach ($groups as $studentsName => $ball) {

        if ($ball < 3) {
            $exclude[$group][] = $studentName;
        }
    }
}

print_r($avergrade);

arsort($avergrade);
$topGroup = array_key_first($avergrade);

echo "Наивысший средний бал у группы:\n $topGroup = $averagegrade[$topGroup] ;" . PHP_EOL;
echo "Список студентов на отчисление: " . PHP_EOL;
print_r($exclude);
