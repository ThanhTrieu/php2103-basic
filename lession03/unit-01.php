<?php 
// tim hieu ve string (chuoi) php - kieu du kieu
// gia tri duoc nam trong dau nhay don hay nhay kep
// khi ma dung nhay kep thi co the su dung bien ben trong, con nhay thi ko.

$name = 'Teo'; // kieu du lieu la string
$hello = " xin chao, ten toi la {$name}"; // su dung bien trong chuoi
$hi = 'chao ban, toi ten la {$name}'; // khong hieu la bien
$sayHi = 'chao ban toi ten la ' . $name; // '.' toan tu ghep chuoi - noi chuoi
echo $hello;
echo '<br/>';
echo $hi;
echo '<br/>';
echo $sayHi;
echo '<br/>';

$test = 'Hom nay la ngay \'cuoi cung\' cua thang'; // long - ghep nhay vao chuoi nhay don
//echo $test;
$test2 = 'Hom nay ngay "dep troi" '; 
//echo $test2;

$string = "chung ta dang hoc JS";
$newString = str_replace("JS","PHP",$string);
echo $string;
echo '<br/>';
echo $newString;
echo '<br/>';

// server side rendering
$jsHi = "<script>alert('hi')</script>";
echo htmlentities($jsHi);