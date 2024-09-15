<?php

//    for ($count = 2; $count < 11; $count+=2)
//    {
//        echo $count;
//        echo "<br/>";
//    }

//$count = 1;

//while ($count < 21)
//{
//    echo $count. "<br/>";
//    $count += 1;
//}

//$count = 1;

//while ($count <= 20) {
//    echo $count . "<br/>";
//    $count++;
//}

//$count = 1;

//while ($count <= 100)
//{
//    if ($count % 3 === 0) // 3の倍数のときはスキップ
//    {
//        $count++;
//        continue;
//    }

//    if ($count === 20) // countが20のときにループを終了
//    {
//        break;
//    }

//    echo $count . "<br/>";
//    $count++;
//}

//$nume = 0;

//do
//{
//    echo "num = ". $nume. "<br/>";
//    $nume += 1;
//}

//while ($nume < 3);

$FizzBuzz = "FizzBuzz";
$Fizz = "Fizz";
$Buzz = "Buzz";

for ($count = 1; $count <= 50; $count += 1)
{

    if ($count %15 === 0)
    {
        echo $FizzBuzz. "<br/>";
    }

    elseif ($count %3 === 0)
    {
        echo $Fizz. "<br/>";
    }

    elseif ($count %5 === 0)
    {
        echo $Buzz. "<br/>";
    }

    else
    {
        echo $count. "<br/>";
    }

}






?>
