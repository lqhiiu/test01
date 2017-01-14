<?php
// 创建一个有异常处理的函数
class Dog{
    public $name;
    public $age;
}

$dog = new Dog();
$a = array (1, 2, array ("a", "b", "c"));
$dog->name = "PIG";
$dog->age = 18;

$jstr = json_encode($dog);
echo $jstr;

var_dump(json_decode($jstr));
print_r(json_decode($jstr));
var_export($a);
?>