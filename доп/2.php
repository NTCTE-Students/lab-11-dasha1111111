<?php

$htmlText = "<div>Привет, <strong>мир</strong>!</div><p>Это пример текста с <a href='#'>ссылкой</a>.</p>";


$pattern = "/<[^>]+>/";

if (preg_match_all($pattern, $htmlText, $matches)) {
    print('Найденные HTML-теги:<br>' . implode(", ", $matches[0]));
} else {
    print('HTML-теги не найдены');
}
?>
