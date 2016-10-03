<?php
function write_out_files($dir){
if($handle = opendir($dir)){
	echo 'catalog :'.$handle . '</br>';
	echo 'files' . ':';
	
	while(false!==($file = readdir($handle))){
		echo $file . '</br>';
		//echo var_dump($file);
	}
}
}
 write_out_files("C:/xampp/htdocs");
 //writ_out_files("C:/xampp/htdocs/yii_2project");
?>