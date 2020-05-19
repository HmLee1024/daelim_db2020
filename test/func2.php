<?php

$args = [
  'hello' => "안녕",
  'msg' => "대림"
];

function greeting($args) //매개변수
{
  echo $args['hello'] . " " . $args['msg'] . ".";
  // 문자열 결합 1 + 1 = 2 / 1 + '1' = 11
}

//선언 -> 호출
// 1
greeting($args); // 인자값


$args2 = [
  'msg' => "대림",
  'hello' => "안녕",
  'num' => "123456"
];

greeting($args); // 인자값