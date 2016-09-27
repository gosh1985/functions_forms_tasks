
<?php
if(isset($_POST['submit']) && !empty($_POST['sentence'])){
$sentence = $_POST['sentence'];
/**$rev = array();
for($i=strlen($sentence);$i>=0;$i--){
	$rev[] = $sentence[$i];
	$revstr = implode('',$rev);
}
echo $revstr;
*/
$b = '';
for($i=strlen($sentence);$i>=0;$i--)
	$b.=$sentence[$i];
	$sentence = $b;
	echo $sentence;

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