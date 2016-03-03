<?php 
// c5.php

$lat = ['a', 'b', 'v', 'g', 'd', ']', 'e', '\\', 'z', 'y', 'i', 'j', 'k', 'l', 'q', 'm', 'n', 'w', 'o', 'p', 'r', 's', 't', "'", 'u', 'f', 'h', 'c', ';', 'x', '[', 'A', 'B', 'V', 'G', 'D', '}', 'E', '|', 'Z', 'Y', 'I', 'J', 'K', 'L', 'Q', 'M', 'N', 'W', 'O', 'P', 'R', 'S', 'T', '"', 'U', 'F', 'H', 'C', ':', 'X', '{'];

$cyr = ['а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'ѕ', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ', 'о', 'п', 'р', 'с', 'т', "ќ", 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш', 'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'Ѕ', 'И', 'Ј', 'К', 'Л', 'Љ', 'М', 'Н', 'Њ', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Џ', 'Ш'];

$orig = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec augue auctor justo euismod semper quis quis nulla. In ut erat a felis dapibus malesuada in ut odio. Sed vitae ultricies arcu. In hac habitasse platea dictumst. In ante erat, interdum at massa et, condimentum bibendum sem. Praesent quis mauris augue. Aliquam tristique, erat eget iaculis efficitur, mauris tellus auctor urna, id porta eros tellus et risus. Pellentesque vitae lobortis tortor, sed tristique nisl. Fusce eget mi hendrerit, dictum mauris non, congue neque. Duis dapibus sem eget rhoncus volutpat. Morbi vitae sem nec mauris facilisis varius a vitae nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed viverra euismod metus, sit amet facilisis erat dapibus at. Donec dignissim gravida sollicitudin.';

echo str_replace($lat, $cyr, $orig);
?>