<?php
$date = '21.02.2025';

$pattern = "/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[0-2])\.(\d{4})$/";

if (preg_match($pattern, $date)) {

    $parts = explode('.', $date);
    $day = (int)$parts[0];
    $month = (int)$parts[1];
    $year = (int)$parts[2];

    if (checkdate($month, $day, $year)) {
        print('Корректная дата');
    } else {
        print('Некорректная дата: такой день не существует в этом месяце');
    }
} else {
    print('Некорректная дата: неверный формат');
}
?>
