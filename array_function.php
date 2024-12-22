<?php 
//ksort() تقوم بفرز عناصر مصفوفه ارتباطيه عن طريق المفتاح
$age = array("peter"=>20, "harry"=>14, "john"=>45,"clark"=>35);
krsort($age);
print_r($age);


//#########################
//array_push
$fruits = array("apple", "banana");
array_push($fruits, "orange", "mango");
print_r($fruits);

//array_pop تُستخدم لإزالة العنصر الأخير من المصفوفة وإرجاعه.
$fruits = array("apple", "banana", "orange");
$last_fruit = array_pop($fruits);
print_r($fruits);
echo $last_fruit;

//array_merge`تُستخدم لدمج مصفوفتين أو أكثر في مصفوفة واحده
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$result = array_merge($array1, $array2);
print_r($result);

//array_diff ُستخدم لإيجاد العناصر المختلفة بين مصفوفتين أو أكثر
$array1 = array("a" => "red", "b" => "green", "c" => "blue");
$array2 = array("a" => "red", "b" => "yellow");
$result = array_diff($array1, $array2);
print_r($result);

//array_searchتُستخدم للبحث عن قيمة معينة داخل المصفوفة وإرجاع المفتاح المقابل لها
$array = array("a" => "apple", "b" => "banana", "c" => "cherry");
$key = array_search("banana", $array);
echo $key;

//array_keysتُستخدم لإرجاع جميع مفاتيح المصفوفة.
$array = array("a" => "apple", "b" => "banana", "c" => "cherry");
$keys = array_keys($array);
print_r($keys);

//array_values تُستخدم لإرجاع جميع القيم في المصفوفة
$array = array("a" => "apple", "b" => "banana", "c" => "cherry");
$values = array_values($array);
print_r($values);


//in_arrayتُستخدم للتحقق مما إذا كانت قيمة معينة موجودة داخل المصفوفة
$array = array("apple", "banana", "cherry");
if (in_array("banana", $array)) {
    echo "توجد";
} else {
    echo "لا توجد";
}

//array_reverseتُستخدم لعكس ترتيب عناصر المصفوفة
$array = array("a" => "apple", "b" => "banana", "c" => "cherry");
$reversed = array_reverse($array);
print_r($reversed);

//sort ُستخدم لترتيب عناصر المصفوفة بترتيب تصاعدي
$array = array("banana", "apple", "cherry");
sort($array);
print_r($array);

?>