<?php
    $arr = [];

    for($i = 0; $i < 10; $i++){
        if($i == 5) $arr[$i] = 0;
        else $arr[$i] = rand(0, 100);
    }

    echo "Получился такой массив с рандомными числами - ", print_r($arr), "<br>";

    // минимальный по модулю элемент массива

    $minimum = $arr[0];
    for($i = 0; $i < count($arr); $i++){
        $temp = $arr[$i];
        if($temp < 0) {
            $temp = $temp * (-1);
        }
        
        if($minimum > $temp) {
            $minimum = $temp;
        }
    }

    echo "Минимальное по модулю число - $minimum <br>";

    // Сумма модулей элементов массива расположенных после первого элемента равного 0

    $indexZero = array_search(0, $arr); //Нахождение индекс нужного числа через indexOf
    $sum = 0;

    for($i = $indexZero; $i < count($arr); $i++){
        $temp = $arr[$i];
        if($temp < 0) {
            $temp = $temp * (-1);
        }

        $sum += $temp;
    }

    echo "Сумма всех модульных элементов после 0 равна $sum <br>";

    // Массив, в котором в начале идут чётные числа, а потом нечётные

    $masTwo = [];
    $counterTwo = 0;

    $masNotTwo = [];
    $counterNotTwo = 0;

    // Нахождение чётных и нечётных
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i]%2==0){
            $masTwo[$counterTwo] = $arr[$i];
            $counterTwo++;
        }
        else{
            $masNotTwo[$counterNotTwo] = $arr[$i];
            $counterNotTwo++;
        }
    }

    $countArr = 0;
    // Запись чётных
    for($i = 0; $i < count($masTwo); $i++){
        $arr[$countArr] = $masTwo[$i];
        $countArr++;
    }

    //Запись нечётных
    for($i = 0; $i < count($masNotTwo); $i++){
        $arr[$countArr] = $masNotTwo[$i];
        $countArr++;
    }

    echo "В начале идут чётные числа, а потом нечётные - ", print_r($arr);
    
?>