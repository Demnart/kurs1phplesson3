<?php
function part1()
{
    $i = 1;

    while ($i < 100) {
        if ($i % 3 == 0) {
            echo $i . ', ';
        }

        $i++;
    }

function part2($n){
        $array = [];
        for ($i = 0; $i < $n ;$i++ ){
            $a = mt_rand(1,50);
            $array[]=$a;
        }
        arsort($array);
        return $array;
    }

}

?>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Первое задание!</h1>
<p> Вывести на экран числа от 1 до 100 нацело делящиеся на 3 <br>
    <?php
    part1();
    ?>
</p>
<hr>
<h1>Второе задание!</h1>
<p>Напишите функцию, которая создает массив из n чисел и вернет его в отсортированном по убыванию, порядке </p>
<p>
    <?php

    $n = mt_rand(1,15);
    $a = part2($n);
    foreach ($a as $value) {
        echo $value . ', ';
    }

    ?></p>
<hr>
<h1>Третье задание!</h1>
<p>Создайте массив, в которм ключи это название регионов, а значения города, выведите его на экран</p>
<?php
$city = ['Север' => ['Бричаны','Бельцы'],
         'Центр'=>['Кишинев','Вадулуй-Воды'],
         'Юг'=>['Бешалма','Комрат']
    ];

foreach ($city as $key => $town){
    echo $key . ':'. '<br>';
    foreach ($town as $town1){
        echo '-'.$town1 . '<br>';
    }
    echo '<br>';
}
?>
</body>
</html>
