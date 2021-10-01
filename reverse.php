<?php

function reverseString($string){
/*разбиваем строку по пробелам и в цикле выводим каждое слово задом на перед.
  2 вариант: результат записать в массив, потом объединить его в строку и сделать return*/

    $words = explode(" ", $string);
    foreach ($words as $word){
        echo strrev($word), " ";
    }
}

reverseString("Go to the cinema");