<?php
echo "안녕하세요.";

// include_once "../Hello.php";
include "../vendor/autoload.php";

//클래스의 객체를 생성
$obj = new \Modules\Gogi\Hello;
$obj->greeting();

