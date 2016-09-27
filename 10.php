<?php
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sentence = $_POST['sentence'];
	
$words_arr = array();

foreach (explode(' ', $sentence) as $word){
    if ( !isset($words_arr[$word]) ){
        $words_arr[$word] = 0;
    }
    $words_arr[$word]++;
}
arsort($words_arr);

echo "<pre>";
echo "Топ слов:".PHP_EOL;
print_r($words_arr);
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