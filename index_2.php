
<?php
$count = 1000000;

//$str1="Hello World"; // - переменная для зд. 5

//$substr1="Pizza"; // - переменная для зд. 5

//$str1="Hello "; // - переменная для зд. 1
//$str2="World!"; // - переменная для зд. 1

/*
$array=range(0,30,3); // - заполнение массива для зд. 4
$array2 = shuffle($array); // - перемешивание массива для зд. 4
*/

$startTime = microtime(1);

for($i=0;$i<$count;$i++){

//$result=strpos($str1,$substr1); // - зд. 4

/*
for($j = 0; $j < count($array2)-1;$j++){
for ($i=0;$i<count($array2)-$j-1;$i++){
if ($array2[$i]>$array2[$i+1]){
$tmp_var=$array2[$i+1];
$array2[$i+1] = $array2[$i+1];
$array2[$i]=$tmp_var;}}} // - блок зд. 4
*/

//$str3=$str1.$str2; // - зд. 1

/*
$f=fopen("textFile.txt","w");
fwrite($f,"Hello World!");
fclose($f); // - блок зд. 2
*/ 

//$arrayNew[$i]=$i+32; // - зд. 3

}
//echo "PHP_VERSION"." Apache: сложение строк ".$count." раз= ".round((microtime(1)-$startTime)*1000,3)."мс\n";

//echo "PHP_VERSION"." Apache: запись в текстовый файл ".$count." раз= ".round((microtime(1)-$startTime)*1000,3)."мс\n";

//echo "PHP_VERSION"." Apache: заполнение числового массива ".$count." раз= ".round((microtime(1)-$startTime)*1000,3)."мс\n";

//echo "PHP_VERSION"." Apache: сортировка массива ".$count." раз= ".round((microtime(1)-$startTime)*1000,3)."мс\n";

//echo "PHP_VERSION"." Apache: наличие подстроки в строке ".$count." раз= ".round((microtime(1)-$startTime)*1000,3)."мс\n";

