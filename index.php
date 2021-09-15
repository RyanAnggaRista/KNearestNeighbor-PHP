<?php

$train_input = [[11, 26], [15, 29], [19, 28], [18, 30], [16, 26], [23, 25], [25, 22], [21, 24], [23, 25], [29, 24]];
$train_target = [1, 1, 1, 1, 1, 0, 0, 0, 0, 0];
$nama = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
$k = 3;
$input = [19, 25];
$panjang_kelas = count($train_target);
# jarak euclidean
echo "------ nilai euclidean ------", "<br>";
$var = array();
for ($i = 0; $i < $panjang_kelas; $i++){
    $euclidean = sqrt(($train_input[$i][0]-$input[0])**2 + ($train_input[$i][1]-$input[1])**2);
    $euclidean = number_format($euclidean,2,",",".");
    array_push($var, [$euclidean, $nama[$i], $train_target[$i]]);
    print_r($var[$i]);
    echo "<br>";
}
echo "------ Diurutkan dari terdekat ------", "<br>";

$sort = array();
for ($i = 0; $i < $panjang_kelas; $i++){
    sort($var);
    array_push($sort, $var[$i]);
    print_r($sort[$i]);
    echo "<br>";
}

$modus = array();
echo "------ diambil data teratas sesuai nilai k ------", "<br>";
for ($i = 0; $i < $k; $i++){
    print_r($sort[$i][2]);
    array_push($modus, $sort[$i][2]);
    echo"<br>"; 
}
echo"<br>"; 
$a = array_count_values($modus);

print_r($a);