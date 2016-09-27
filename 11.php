<?php
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sentence = $_POST['sentence'];
//$newtext = strtoupper($sentence);
//for($i=0;$i<strlen($sentence);$i++){
	//$newtext = preg_replace('/\.([^\. ])/',  strtoupper('. \1'), $sentence);
	$str = 'Honda-id-138451.html, Mazda-id-999.html';
//$pattern = '@[0-9]+@';
//$pattern = '@[a-b]+\.\[A-B]+@';
$pattern = '/\.\s([a-z])/';
//$pattern = '/[a-z]\.\s/';
//$pattern = '/[a-z]\.\s([a-z])/';
//$pattern = '. \1';
function toUpper($pockets) {
return ucfirst($pockets[0]);
}
//$replacepattern = '/[a-z]\.\s[A-Z]/';
$str = preg_replace_callback($pattern, "toUpper", $sentence);
echo $str;



//echo preg_replace($pattern,$replacepattern, $sentence);

}
//echo $newtext;

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