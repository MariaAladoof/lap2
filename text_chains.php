<?php
//`strlen`تُستخدم لمعرفة طول السلسلة النصية.
$text = "مرحبا بك";
echo strlen($text); // الناتج: 13

//str_replaceتُستخدم لاستبدال جزء من السلسلة النصية بجزء آخر.
$text = "مرحبا بك";
$newText = str_replace("بك", "بالعالم", $text);
echo $newText; // الناتج: مرحبا بالعالم


//strposُستخدم للعثور على موضع أول ظهور لنص معين داخل سلسلة نصية
$text = "مرحبا بك";
$position = strpos($text, "بك");
echo $position; // الناتج: 7

//substrتُستخدم لاقتطاع جزء من السلسلة النصية.
$text = "مرحبا بك";
$part = substr($text, 7, 2);
echo $part; // الناتج: بك

//strtoupperتُستخدم لتحويل النص إلى أحرف كبيرة.
$text = "مرحبا بك";
$upperText = strtoupper($text);
echo $upperText; // الناتج: مرحبا بك (النص العربي لا يتأثر، لكن النص الإنجليزي يتحول لأحرف كبيرة)

//strtolowerتُستخدم لتحويل النص إلى أحرف صغيرة.
$text = "WELCOME";
$lowerText = strtolower($text);
echo $lowerText; // الناتج: welcome

//ucfirstتُستخدم لتحويل أول حرف من النص إلى حرف كبير

$text = "welcome";
$ucfirstText = ucfirst($text);
echo $ucfirstText; // الناتج: Welcome

//`lcfirst`ُستخدم لتحويل أول حرف من النص إلى حرف صغير
$text = "Welcome";
$lcfirstText = lcfirst($text);
echo $lcfirstText; // الناتج: welcome

//trimتُستخدم لإزالة الفراغات من بداية ونهاية السلسلة النصية
$text = "  مرحبا بك  ";
$trimmedText = trim($text);
echo $trimmedText; // الناتج: مرحبا بك

//explodeتُستخدم لتقسيم السلسلة النصية إلى مصفوفة بناءً على محدد معين.

$text = "مرحبا,بك,في,عالم,PHP";
$array = explode(",", $text);
print_r($array); // الناتج: Array ( [0] => مرحبا [1] => بك [2] => في [3] => عالم [4] => PHP )

//implodeتُستخدم لتحويل مصفوفة إلى سلسلة نصية باستخدام محدد معين.
$array = array("مرحبا", "بك", "في", "عالم", "PHP");
$text = implode(" ", $array);
echo $text; // الناتج: مرحبا بك في عالم PHP

?>