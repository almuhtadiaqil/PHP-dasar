<?php

$eksekusi = array('5', '+', '4', '-', '3', '*', '2', '**', '5', '%', '10', '/', '2');
$angka = array();
$operator = array();
foreach ($eksekusi as $number) {

    if (is_numeric($number)) {
        array_push($angka, $number);
    } else {
        array_push($operator, $number);
    }
}
$temp = $angka[0];
for ($i = 1; $i < count($angka); $i++) {
    switch ($operator[$i - 1]) {
        case '+':
            echo "Penjumlahan $temp + $angka[$i]";
            $temp = $temp + $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
        case '-':
            echo "Pengurangan $temp - $angka[$i]";
            $temp = $temp - $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
        case '*':
            echo "Perkalian $temp * $angka[$i]";
            $temp = $temp * $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
        case '**':
            echo "Perpangkatan $temp ** $angka[$i]";
            $temp = $temp ** $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
        case '%':
            echo "Modulus $temp % $angka[$i]";
            $temp = $temp % $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
        case '/':
            echo "Pembagian $temp / $angka[$i]";
            $temp = $temp / $angka[$i];
            echo '<br>';
            echo $temp;
            echo '<br>';
            break;
    }
}
