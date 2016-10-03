<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
function countNumOfChuncks($sentence){
	$arr = array();
	foreach(explode(' ',$sentence)as $word){
		if ( !isset($arr[$word]) ){
        $arr[$word] = 0;
    }
    $arr[$word]++;
}

echo "<pre>";
echo "Топ слов:".PHP_EOL.PHP_EOL;
print_r($arr);
}

countNumOfChuncks($string);




?>