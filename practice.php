<?php
echo  'hello php';

echo '<br>';

$a = 3;
$b = 7;
echo '課題1' .$a + $b;

echo '<br>';

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", 
"7月", "8月", "9月", "10月", "11月", "12月"];
echo '課題2 ' .$array_month[9];

echo '<br>';

$hello = "Hello,";
$name = "Shota";
$world = "'s World!";
echo '課題3 ' .$hello.$name.$world;

echo '<br>';

$tech_boost = "tech";
$tech_boost .="boost";
echo '課題4 ' .$tech_boost;

echo '<br>';

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo '課題5 '.$calendar_2018["December"];