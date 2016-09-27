
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<form action="" method = "post">
<input type = "text" name = "integer"/></br></br>
<input type = "submit" name = "submit" value = "Ввести:"/>


<?php 
//echo("Hello World").'</br>';
if(isset($_POST['submit'])){
$integer = $_POST['integer'];
$myfile = fopen("text.txt", "r") or die("Unable to open file!");
$read_myfile = fread($myfile,filesize("text.txt"));

fclose($myfile);

function removeLongWords($text, $max_length){
    $words = array_unique(explode(' ', $text)); // Берем только уникальные слова
    foreach($words as $word){
        if ( mb_strlen($word) > $max_length ){
            $text = str_replace($word, '', $text);
        }
    }
    return $text;
}
echo removeLongWords($read_myfile,$integer);
}
?>
</body>
</html>