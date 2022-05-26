<?php

$arr = [
  "первое",
  "второе",
];

$arrNumber = [];

$arrSize = count($arr);
for ($i = 0; $i < $arrSize; $i++) {
  do {
    echo PHP_EOL;
    echo "Введите $arr[$i] число: ";
    $num = trim(fgets(STDIN));
    $flag = is_numeric($num) ? false : true;
    if ($flag) {
      fwrite(STDERR, "Введите, пожалуйста, число \n");
    } elseif (strpos($num, '.')) {
      fwrite(STDERR, "Введите, пожалуйста, целое число \n");
      $flag = true;
    }
  } while ($flag);
  $arrNumber[] = (int)$num;
}
if ($arrNumber[1] === 0) {
  fwrite(STDERR, "Делить на 0 нельзя");
} else {
  $rez = $arrNumber[0] / $arrNumber[1];
  $str = "$arrNumber[0] / $arrNumber[1] = $rez";
  fwrite(STDOUT, $str);
}
