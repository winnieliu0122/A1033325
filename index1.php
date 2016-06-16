
<?php
class PostOffice{
	function mailFiler(){

 	$filename = "string.txt";
    $result = array();
 
    if ( file_exists($filename) ) {
        $file = fopen( $filename, "r" );
  
        if ( $file != NULL ) {
            while ( !feof($file) ) {
                $result[] = fgets( $file ); 
	        	}	 
	    	}     		
		}
		echo join("</br>", $result);	
		}

	echo "<br/>";
	function mailRegex(){
		$file = fopen("string.txt", "r");
		while (!feof($file)) {
		$value = fgets($file);
	    $clean=preg_replace("/[^A-Za-z0-9]/","",$value);
		echo $clean;
		}

	}

	echo "<br/>";
	function spiltroad(){
		$file2 = fopen("road.txt", "r");
		while (!feof($file2)) {
		$value2 = fgets($file2);
		echo $value2;
		}	
	}
}
?>