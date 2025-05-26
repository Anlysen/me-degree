<?php

$currentDate = new DateTime();

$year = $currentDate->format('Y');
$mouth = $currentDate->format('m');
$mouthName = $currentDate->format('F');
$dayInMouth = $currentDate->format('t');

$firstDayOfMouth = new DateTime("$year-$mouth-01");
$firstDayOfWeek = $firstDayOfMouth->format('N');

$weekDays = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];

echo "<h2>$mouthName</h2>";
echo "<table border='1'>";
echo "<tr>";

foreach ($weekDays as $day) {
    echo "<th>$day</th>";
}

echo "<tr>";
echo "<tr>";

for ($i = 1; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
}

$currentDay = 1;
$dayOfWeek = $firstDayOfWeek;

while ($currentDay <= $dayInMouth) {
    if ($dayOfWeek > 7) {
        echo "</tr><tr>";
        $dayOfWeek = 1;
    }

    echo "<td>$currentDay</td>";

    $currentDay++;
    $dayOfWeek++;
}

while ($dayOfWeek <= 7) {
    echo "<td></td>";
    $dayOfWeek++;
}

echo "</tr>";
echo "</table>";
