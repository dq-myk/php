<?php

//function num($a, $b)
//{
//    $value = $a + $b;
//    return $value;
//}

//total = num(2, 3);
//echo $total;

//function score($score1, $score2, $score3)
//{
//    $add = $score1 + $score2 + $score3;
//    return $add;
//}

//$total = score(100, 50, 50);

//if ($total > 210)
//{
//    echo "合計点は". $total. "なので合格です";
//}

//else
//{
//    echo "合計点は". $total. "なので不合格です";
//}

function triangle_element($length, $width)
{
    return $length * $width / 2;
}

function quadrangle_element($length, $width)
{
    return $length * $width;
}

function trapezoid_element($length, $width, $height)
{
    return ($length + $width) * $height / 2;
}

echo triangle_element(7, 8). "<br/>";
echo quadrangle_element(5, 5). "<br/>";
echo trapezoid_element(4, 5, 4);




















?>
