<?php

$xml= new DomDocument("1.0","UTF-8"); 
$xml->load('complaintsdb.xml');
$complaints = $xml->getElementsByTagName( "complaint" );
foreach( $complaints as $carp )
{
$texts = $carp->getElementsByTagName( "complainttext" );
$text = $texts->item(0)->nodeValue;
 
$times = $carp->getElementsByTagName( "time" );
$time = $times->item(0)->nodeValue;
 
 echo '<div style = "margin-left:40px;margin-right:40px;margin-top:20px;"><div  class="panel panel-default">
  <div class="panel-body">'.
    $text.
  '</div>
  <div class="panel-footer">' . $time . '</div>
</div></div>';
echo'</br>';

}
$find = array('idiot','bitch','fuck');
$replace = array('id**t','bi**h','f**k');

if(isset($_POST['submit'])){
	
	//$xml->load('complaintsdb.xml');
	$complaint = $_POST['complaint'];
	$new_complaint = str_ireplace($find,$replace,$complaint);
	
	$date = date('l jS \of F Y h:i:s A');
	$rootTag = $xml->getElementsByTagName("root")->item(0);
	$complaintTag = $xml->createElement("complaint");
	$textTag = $xml->createElement("complainttext",$new_complaint);    //$complaint
	$timeTag = $xml->createElement("time",$date);
	$complaintTag->appendChild($textTag);
	$complaintTag->appendChild($timeTag);
	$rootTag->appendChild($complaintTag);
	$xml->save('complaintsdb.xml');
	
	
	
}

?>

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
<form style = "margin-left:40px;" action="" method = "post" >
<p><b>Введите ваш отзыв:</b></p>
    <p><textarea rows="5" cols="50" name="complaint"></textarea></p>
<input type = "submit" name = "submit" value = "Move:"/>
</form>
</body>
</html>