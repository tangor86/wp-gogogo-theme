<?php

	define("SEP", "\\");

	//settings class!
	class sts {
		static $a = array(
			'targetDir' => 'C:\Users\EUGENY\vvv-local\www\wordpress-one\public_html\wp-content\themes\gogogo'
		);
	}

	$arr = sts::$a;
	
	function getPath($fName) {
		//return $transformationObj['targetDir'] . SEP . $fName;
		return sts::$a['targetDir'] . SEP . $fName;
	}

	echo "Final file name: " . getPath('tst.txt');

	$myfile = fopen($arr['targetDir'] . SEP . "style2.css", "w") or die("Unable to open file!");
	//$myfile = fopen("style2.css", "w") or die("Unable to open file!");

	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	fclose($myfile);

?>