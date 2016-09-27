<?php
$uploaddir = 'gallery/';
$uploadfile =$uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
	echo 'good !!!' . '</br>';
}else{'wrong';}

print_r($_FILES);
print "</pre>";
?>