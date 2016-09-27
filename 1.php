
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<p>Put words for the sake to finde common in both textarea</p>
<form action="" method = "post">
<input type = "textarea" name = "first"/></br></br>
<input type = "textarea" name = "second"/>
<input type = "submit" name = "submit" value = "Ввести:"/>
</form>
<?php 
if(isset($_POST['submit'])){
$first = $_POST['first'];                                           
$second = $_POST['second'];
$f = explode(' ',$first);
$s = explode(' ',$second);
function getCommonWords($a,$b){
for($i = 0;$i<count($a);$i++){
	if (in_array($a[$i],$b)){
		echo $a[$i] . ',' . '</br>';
	}
} 
}

  //$_SERVER['PHP_SELF']
  getCommonWords($f,$s);
  echo '</br>';
  echo '</br>';
echo print_r($f);
echo '</br>';
echo '</br>';
echo var_dump($second);
}
  
?>
</body>
</html>