<?php 
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sen = $_POST['sentence'];

function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

if (!function_exists('mb_ucfirst') && function_exists('mb_substr')) {
    function mb_ucfirst($string) {
        $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
        return $string;
    }
}
function toUp($sentence){
	$arrUp = array();
	foreach($arr = multiexplode(array('.','. '),$sentence)as $chunck){
	$chunckToUp = mb_ucfirst($chunck);
	array_push($arrUp,$chunckToUp);
    }
	$str = implode('. ',$arrUp);
	echo $str;
	
}
toUp($sen);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turn word</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<form style = "margin-left:40px;" action="" method = "post" >
<p><b>Введите предложение</b></p>
    <p><textarea rows="5" cols="50" name="sentence"></textarea></p>
<input type = "submit" name = "submit" value = "Move:"/>
</form>
</body>
</html>