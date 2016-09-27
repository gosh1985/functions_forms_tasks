
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaints</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php
//$arr = array();
$arr = array('London is the capital city of England. It is the most populous city in the United Kingdom','Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans');
if(isset($_POST['submit'])){
$complaint = $_POST['complaint'];
array_push($arr,$complaint);
}

foreach($arr as $ar) {
	
 echo '<div style = "margin-left:40px;margin-right:40px;margin-top:20px;"><div  class="panel panel-default">
  <div class="panel-body">'.
    $ar.
  '</div>
  <div class="panel-footer">' . date('l jS \of F Y h:i:s A') . '</div>
</div></div>';
echo'</br>';
echo'</br>';
}

?>
<form style = "margin-left:40px;" action="" method = "post" >
<input type = "textarea" name = "complaint"/></br></br>
<input type = "submit" name = "submit" value = "Move:"/>



</body>
</html>

