<?php
/**1. PHP и HTML. Напишите код на PHP
В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так? */
$a = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores debitis eaque nobis adipisci placeat amet, at aperiam, doloremque molestiae dicta quaerat labore esse rem incidunt qui commodi sunt magnam est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid explicabo quisquam distinctio nesciunt veritatis officiis quis. Officia dicta ullam dolores, nihil voluptatum, sequi odio architecto minima hic natus adipisci? Voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias numquam repellat pariatur corporis voluptas ex reiciendis fugiat enim atque facilis est consequatur, neque libero voluptates, quidem omnis dolorem iste corrupti!";
//var_dump($a.length);
$link = "newsTask1.php";

$b = substr($a, 0, 180).'...';
$part=substr($b, 0, strrpos(substr($b,0,strrpos(rtrim($b," ")," ")), " "));

//echo $part;

$x = strlen($part);
$linkText = substr($b, ++$x);