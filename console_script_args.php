<?php

if ($argc > 2) {
  if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    fwrite(STDERR, "Введите, пожалуйста, число \n");
  } elseif (strpos($argv[1], '.') || strpos($argv[2], '.')) {
    fwrite(STDERR, "Введите, пожалуйста, целое число \n");
  } elseif ($argv[2] === '0') {
    fwrite(STDERR, "Делить на 0 нельзя \n");
  } else {
    $rez = (int)$argv[1] / (int)$argv[2];
    $str = "$argv[1] / $argv[2] = $rez \n";
    fwrite(STDOUT, $str);
  }
} else {
  fwrite(STDERR, "Недостаточно параметров \n");
}
