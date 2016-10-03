<?php
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sen = $_POST['sentence'];

function turnTheSentence($sentence){
	
	$arr = explode('. ',$sentence);
	$turnarr = array_reverse($arr);
	foreach($turnarr as $chunck){
		//echo $chunck;
		echo '.'.$chunck;
	}
}
turnTheSentence($sen);
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