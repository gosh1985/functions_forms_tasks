<?php
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sen = $_POST['sentence'];

if (!function_exists('mb_ucfirst') && function_exists('mb_substr')) {
    function mb_ucfirst($string) {
        $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
        return $string;
    }
}
function toUp($sentence){
	$arrUp = array();
	foreach($arr = explode('.',$sentence)as $chanck){
	$chanckToUp = mb_ucfirst($chanck);
	array_push($arrUp,$chanckToUp);
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