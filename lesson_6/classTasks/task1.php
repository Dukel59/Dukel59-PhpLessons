<?php

$string = 'Hello!!!! My name is Nikita?))))(((((((((';
$arr = ['/\!{2,}/', '/\?{2,}/', '/\({2,}/', '/\){2,}/'];
$str = preg_replace($arr,['!', '?', '(', ')'],$string);
print_r($str);