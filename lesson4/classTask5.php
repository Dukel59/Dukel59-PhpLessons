<?php

$string = '<h1>This is heading 1</h1><h1>This is heading 2</h1><h1>This is heading 3</h1>';

$search = ['<h1>', '</h1>'];
$replace = ['<h2>', '</h2>'];
$result = str_replace($search, $replace, $string);
print_r($result);