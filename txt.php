<?php

echo "test";




// test du checksum ***********************************************

$csvalid = false;

$cs5 = $_GET["cs4"];

			if ($cs5 != "") {
			
					
			
							if (is_numeric($cs5)) {
								
								
							
										if (strlen($cs5) == 9) {
											
											
											
											$cs6 = intval(substr($cs5, 0, 3));
											$cs7 = substr($cs5, 3, 3);
											$cs8 = intval(substr($cs5, 6, 3));
			
												
													
												if (($cs6 % 47) == 0) { 
														$cs6v = true;
												}
												else { 
														$cs6v = false;
														}


											

												if (intval($cs7) == ((date("j") * (date("n")))+237)) { 
														$cs7v = true;
												}
												else { 
														$cs7v = false;
														}


												if (($cs8 % 37) == 0) { 
														$cs8v = true;
												}
												else { 
														$cs8v = false;
														}

										
												if ($cs6v == true && $cs7v == true && $cs8v == true) {
													$csvalid = true;
												}
												else
												{
													$csvalid = false;
													 }
												

													
			
										}
							}

			}

// test du referer ***********************************************


		//$reftest = $_SERVER['HTTP_REFERER'];
		
		$reftest = "keycode24.zd.fr";



		if (strlen($reftest) > 0) { 
			
					$reftest = strtolower($reftest);
					
								if (strpos($reftest, 'keycode24.zd.fr') !== false) {
								    $reff = true;
								}
								else {
										$reff = true;
								}
								
		}
		else { 
					
				$reff = false;
					
		}							
			




//echo '<br><br>mode : ' . $_GET["mode"] ;
//echo '<br><br>cnick : ' . $_GET["cnick"] ;
//echo '<br><br>Score : ' . $_GET["score"] ;
//echo '<br>Timesec : ' . $_GET["timesec"] ;
//echo '<br>Cs4 : ' . $_GET["cs4"] ;
//echo '<br>Cs valid : ' . var_export($csvalid, true);
//echo '<br>Reff valid : ' . var_export($reff, true);
//echo "<script>alert('Csvalid : " . var_export($csvalid, true) . "');</script>";



// enregistrement des fichiers ***********************************************

if ($csvalid == true && $reff == true) {

		if ($_GET["mode"] == "addscore") {
	
				$filename = 'scores.txt';
				$somecontent = $_GET["cnick"] . "," . $_GET["score"] . "," . $_GET["timesec"] . "\n";
				
				
				if (is_writable($filename)) {
				
				    // write with cursor at the end of the file
				    if (!$handle = fopen($filename, 'a')) {
				         echo "cannot open ($filename)";
				         exit;
				    }
				
				    // test write something in the file
				    if (fwrite($handle, $somecontent) === FALSE) {
				        echo "cannot write ($filename)";
				        exit;
				    }
				
				    echo "The line ($somecontent) has been succesfully written in ($filename)";
				
				    fclose($handle);
				
				}
				else {
				    echo "The file ($filename) is not writable";
				}

		}
		else if ($_GET["mode"] == "addplayer") {


				$filename = 'player_number.txt';
				
				
				// read file before
				
				
				
				$thenumber = 5;
				
				if (is_writable($filename)) {
				
				    // write with cursor at the end of the file
				    if (!$handle = fopen($filename, 'a')) {
				         echo "cannot open ($filename)";
				         exit;
				    }
				
				    // test write something in the file
				    if (fwrite($handle, $thenumber) === FALSE) {
				        echo "cannot write ($filename)";
				        exit;
				    }
				
				    echo "The number ($thenumber) has been succesfully written in ($filename)";
				
				    fclose($handle);
				
				}
				else {
				    echo "The file ($filename) is not writable";
				}




		}




else { 
	
	echo "csvalid or reff incorrect";
	
	}

}



?>




