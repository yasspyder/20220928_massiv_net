
<?php
$wishes = ['счастья', 'здоровья', 'настроения', 'терпения', 'воображения'];
$epithets = ['бесконечного', 'крепкого', 'отличного', 'космического', 'безудержного'];

$name = readline("Как зовут именинника?");
$wishLimit = 3;
$wishChosen = [];

for ($i = 1; $i <= $wishLimit; $i++) {
    $wishChosen[] = $epithets[array_rand($epithets)] . " " . $wishes[array_rand($wishes)];
}

$lastWish = array_pop($wishChosen);

$congratulationsText = " Дорогой $name, от всего сердца поздравляю тебя с Днём рождения, желаю тебе " . implode(', ', $wishChosen) . " и " . $lastWish;

echo $congratulationsText;
