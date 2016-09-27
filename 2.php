<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<p>Enter a sentense for sorting and get longest words</p>
<form action="" method = "post">
<input type = "textarea" width = "200" name = "first"/></br></br>
<input type = "submit" name = "submit" value = "Ввести:"/>

</form>
<?php 
if(isset($_POST['submit'])
$first = $_POST['first'];                                           

function getLongestWords($a){
	$ar = explode(' ',$a);
    rsort( $ar);
	echo $ar[0]. ',' . ' ' . $ar[1] . ',' . ' ' . $ar[2];
	}
getLongestWords($first);


}

?>
</body>
</html>