<?php	
$dir = ".";
	
// Ouvre un dossier bien connu, et liste tous les fichiers
echo "<a href=../index.php> Main page </a> </br>";	
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) != false) {
	    if ((strcmp($file,"index.php")!=0) && (strcmp($file,"index.php~")!=0) && (strcmp($file,".")!=0) && (strcmp($file,"..")!=0))				
	      	echo "<a href=" .$file. ">". $file. " </a> </br>";
	
        }
        closedir($dh);
    }
}
?>