<!DOCTYPE html>
<html>
<head>

<!--

Keycode24 © is a game developped in august 2019 with javascript and php, written by Matthieu Le Roy 
you can play it here : https://keycode24.zd.fr/

 -->
	
<meta charset="utf-8">	
	
<title>Keycode24</title>

<link rel="icon" type="image/png" href="favicon.png">

<style type="text/css">
body {
	background-color: #212121;
}
.nombres {
	font-family: "Arial";
	font-size: 36px;
	font-weight: bold;
	color: #ECECEC;
	background-color: #343434;
	cursor: pointer;
	width: 48px;
	padding: 1px 1px;
	border-radius: 9px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	opacity: 0.9;
}
.nombres2 {
	font-family: "Arial";
	font-size: 18px;
	font-weight: bold;
	color: #ECECEC;
	background-color: #8E0002;
	cursor: pointer;
	width: 48px;
	height: 48px;
	padding: 1px 1px;
	border-radius: 9px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	opacity: 0.9;
}
.nombres3 {
	font-family: "Arial";
	font-size: 18px;
	font-weight: bold;
	color: #ECECEC;
	background-color: #558E00;
	cursor: pointer;
	width: 48px;
	height: 48px;
	padding: 1px 1px;
	border-radius: 9px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	opacity: 0.9;
}
	
.timer {
	font-family: "Arial";
	font-size: 48px;
	font-weight: bold;
	color: #FF0004;
	background-color: #8E0002;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}

.score {
	font-family: "Arial";
	font-size: 48px;
	font-weight: bold;
	color: #888888;
	background-color: #444444;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}	
	
.codelong {
	font-family: "Arial";
	font-size: 18px;
	font-weight: bold;
	color: #FF0004;
	background-color: #8E0002;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}
.indications {
	font-family: "Arial";
	font-size: 16px;
	font-weight: bold;
	color: #00FF04;
	background-color: #008E02;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}
.saisie {
	font-family: "Arial";
	font-size: 24px;
	font-weight: bold;
	text-align: center;
	color: #00FF04;
	background-color: #008E02;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}
.order {
	font-family: "Wingdings","Arial";
	font-size: 12px;
	font-weight: bold;
	color: #2ac0ff;
	background-color: #0f475e; 
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}
.notorder {
	font-family: "Wingdings","Arial";
	font-size: 12px;
	font-weight: bold;
	color: #f7ff29;
	background-color: #45470c;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}
.steps {
	font-family: "Arial";
	font-size: 12px;
	font-weight: bold;
	color: #FF0004;
	background-color: #8E0002;
}
.steps2 {
	font-family: "Arial";
	font-size: 12px;
	font-weight: bold;
	color: #888888;
	background-color: #444444;
	text-align: center;
	cursor: default;
	border-radius: 9px;
	box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
	opacity: 0.9;
}	
.fondtable {
	background-color: #444444;
	border-radius: 9px;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.fondtable2 {
	background-color: #001B29;
	text-align: center;
	color: #FF0004;
}
	
.incoming {
	font-family: "Arial";
	text-align: center;
	color: #000000;
}
	
.autoval {
	font-family: Arial, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #808080;
	opacity: 0.9;
	cursor: pointer;
}	

@font-face {
  font-family: "Amsterdam Graffiti";
  src: url("fonts/amsterdam.ttf");
}

.hiscores {
  font-family: "Amsterdam Graffiti";
	font-size: 48px;
	font-weight: bold;
	color: #000000;
	text-align: center;
	opacity: 0.7;
}

body {
background-repeat:repeat;
background-position:center top;
}

</style>

    <script type="text/Javascript">

		// detect user language
		var langnavi = navigator.languages || navigator.userLanguage;
		langnavi = langnavi.toString().substring(0, 2).toUpperCase();
				
		var langage;
					if (langnavi == "FR") {
							langage == "FR";
							langinverse = "English";
							
					}
					else { 
							langage == "EN";
							langinverse = "Français";							
						}		
		
		

		function changelanguage() {
			
					if (langage == "FR") {
							langage = "EN";
					}
					else { 
							langage = "FR";
						}

			setsentences();
					
		}


		function setsentences() { // french and english sentences

/*

Label1 title Total remaining time
score title Score
Label16 title Final Keycode (24 digits)
Text1 title try 1
Label2 title in order
Text4 title try 4
Label8 title in order
Label3 title not in order
Label9 title not in order
Text2 title try 2
Label4 title in order
Text5 title try 5
Label10 title in order
Label5 title not in order
Label11 title not in order
Text3 title try 3
Label6 title in order
Text6 title try 6
Label19 title Step (1-8)
Label7 title not in order
Label13 title Information panel
Commanddel title Delete current 3 digits code
Commandval title Validate current 3 digits code
checkval title Automatic validation after 3 digits typed
checkvallabel title Automatic validation after 3 digits typed
howtoplay title value How to play ?
language title value Français
highscorestitle innerHTML Highscores

*/
			
					if (langage == "FR") {
							sentence10 = "Temps total restant";
							sentence11 = "Score";
							sentence12 = "Keycode final (24 chiffres)";
							sentence13 = "essai 1";
							sentence14 = "en ordre";
							sentence15 = "essai 4";
							sentence16 = "en ordre";
							sentence17 = "pas en ordre";
							sentence18 = "pas en ordre";
							sentence19 = "essai 2";
							sentence20 = "en ordre";
							sentence21 = "essai 5";
							sentence22 = "en ordre";
							sentence23 = "pas en ordre";
							sentence24 = "pas en ordre";
							sentence25 = "essai 3";
							sentence26 = "en ordre";
							sentence27 = "essai 6";
							sentence28 = "Etape (1-8)";
							sentence29 = "pas en ordre";
							sentence30 = "Panneau information";
							sentence31 = "Effacer le code de 3 chiffres";
							sentence31b = "EFF";
							sentence32 = "Valider le code de 3 chiffres";
							sentence33 = "Validation automatique après 3 chiffres entrés";
							sentence34 = "Validation automatique après 3 chiffres entrés";
							sentence35 = "Comment jouer à Keycode24 ?";
							sentence36 = "English";
							sentence37 = "Top scores";
					}
					else { 
							sentence10 = "Total remaining time";
							sentence11 = "Score";
							sentence12 = "Final Keycode (24 digits)";
							sentence13 = "try 1";
							sentence14 = "in order";
							sentence15 = "try 4";
							sentence16 = "in order";
							sentence17 = "not in order";
							sentence18 = "not in order";
							sentence19 = "try 2";
							sentence20 = "in order";
							sentence21 = "try 5";
							sentence22 = "in order";
							sentence23 = "not in order";
							sentence24 = "not in order";
							sentence25 = "try 3";
							sentence26 = "in order";
							sentence27 = "try 6";
							sentence28 = "Step (1-8)";							
							sentence29 = "not in order";
							sentence30 = "Information panel";
							sentence31 = "Delete current 3 digits code";
							sentence31b = "DEL";
							sentence32 = "Validate current 3 digits code";
							sentence33 = "Automatic validation after 3 digits typed";
							sentence34 = "Automatic validation after 3 digits typed";
							sentence35 = "How to play Keycode24 ?";
							sentence36 = "Français";
							sentence37 = "Highscores";
						}
						
						
						document.getElementById("Label1").title = sentence10;
						document.getElementById("score").title = sentence11;
						document.getElementById("Label16").title = sentence12;
						document.getElementById("Text1").title = sentence13;						
						document.getElementById("Label2").title = sentence14;						
						document.getElementById("Text4").title = sentence15;
						document.getElementById("Label8").title = sentence16;
						document.getElementById("Label3").title = sentence17;
						document.getElementById("Label9").title = sentence18;
						document.getElementById("Text2").title = sentence19;
						document.getElementById("Label4").title = sentence20;
						document.getElementById("Text5").title = sentence21;
						document.getElementById("Label10").title = sentence22;
						document.getElementById("Label5").title = sentence23;
						document.getElementById("Label11").title = sentence24;
						document.getElementById("Text3").title = sentence25;
						document.getElementById("Label6").title = sentence26;
						document.getElementById("Text6").title = sentence27;
						
						document.getElementById("Label19").title = sentence28;
						
						var stepval = document.getElementById("Label19").value;
						
						if (langage == "FR") {	
								stepval = stepval.replace('STEP', 'ETAPE');
								document.getElementById("Label19").value = stepval;
						}
						else {
								stepval = stepval.replace('ETAPE', 'STEP');
								document.getElementById("Label19").value = stepval;
						}						
						
						
						document.getElementById("Label7").title = sentence29;
						
						
						document.getElementById("Label13").title = sentence30;
						
						var infopanel = document.getElementById("Label13").value;
						
						if (langage == "FR") {	
								infopanel = infopanel.replace('exist but isn\'t the last digit', 'existe mais n\'est pas le dernier chiffre');
								infopanel = infopanel.replace('exist and is the last digit', 'existe et est le dernier chiffre');
								infopanel = infopanel.replace('does not exist', 'n\'existe pas');
								document.getElementById("Label13").value = infopanel;
						}
						else {
								infopanel = infopanel.replace('existe mais n\'est pas le dernier chiffre', 'exist but isn\'t the last digit');
								infopanel = infopanel.replace('existe et est le dernier chiffre', 'exist and is the last digit');
								infopanel = infopanel.replace('n\'existe pas', 'does not exist');
								document.getElementById("Label13").value = infopanel;
						}	
						
						
						document.getElementById("Commanddel").title = sentence31;
						document.getElementById("Commanddel").value = sentence31b;
						
						document.getElementById("Commandval").title = sentence32;
						document.getElementById("checkval").title = sentence33;
						document.getElementById("checkvallabel").title = sentence34;
						
						document.getElementById("howtoplay").title = sentence35;
						document.getElementById("howtoplay").value = sentence35;
						
						document.getElementById("language").title = sentence36;
						document.getElementById("language").value = sentence36;
						
						document.getElementById("highscorestitle").innerHTML = sentence37;
						
						
						var ineur = document.getElementById("highscores").innerHTML;
						
						if (langage == "FR") {
								var regex1 = / in/gi;	
								ineur = ineur.replace(regex1, ' en');
								var regex2 = /seconds/gi;
								ineur = ineur.replace(regex2, 'secondes');
								document.getElementById("highscores").innerHTML = ineur;
						}
						else {
								var regex3 = / en/gi;	
								ineur = ineur.replace(regex3, ' in');
								var regex4 = /secondes/gi;
								ineur = ineur.replace(regex4, 'seconds');
								document.getElementById("highscores").innerHTML = ineur;
						}



						
											
		}




		// listen a key from the keyboard
		document.addEventListener ('keydown', function (event){
    
    //console.log (event.which);
    
			    if ((event.which) == 13) { // Enter
			    Commandval.click();
			    return;	
			    	 }

			    if ((event.which) == 96) { // 0
			    Command0.click();
			    return;	
			    	 }

			    if ((event.which) == 97) { // 1
			    Command1.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 98) { // 2
			    Command2.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 99) { // 3
			    Command3.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 100) { // 4
			    Command4.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 101) { // 5
			    Command5.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 102) { // 6
			    Command6.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 103) { // 7
			    Command7.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 104) { // 8
			    Command8.click();
			    return;	
			    	 }
			    	 
			    if ((event.which) == 105) { // 9
			    Command9.click();
			    return;	
			    	 }

			    if ((event.which) == 8 || (event.which) == 46 || (event.which) == 110) { // suppr 1 and 2 and delete
			    Commanddel.click();
			    return;	
			    	 }			    	 

    	 
		});
		
		function playsound(n) {
					var myAudio = document.createElement("audio");
					myAudio.src = "sounds/" + n + ".mp3";
					myAudio.play();
		}
		
		var Text21b;
		
		var myTimer1Var;
		var myTimer2Var;

		
		
		
		function myTimer1Start() {
  			myTimer1Var = setInterval(timer1, 1000);
		}
		
		function myTimer1Stop() {
  			clearInterval(myTimer1Var);
		}

		
		function myTimer2Start() {
  			myTimer2Var = setInterval(timer2, 1000);
		}
		
		function myTimer2Stop() {
  			clearInterval(myTimer2Var);
		}




		
		function timer1() {
					
				if (parseInt(document.getElementsByName("Text20")[0].value, 10) == 0 && parseInt(document.getElementsByName("Text21")[0].value, 10) == 1) {
				document.getElementsByName("Label1")[0].value = "";
				myTimer1Stop();
				openclosedoor("CLOSE");
				}
	
				document.getElementsByName("Text21")[0].value = parseInt(document.getElementsByName("Text21")[0].value, 10) - 1;
	
				if (parseInt(document.getElementsByName("Text21")[0].value, 10) == -1) {
				document.getElementsByName("Text20")[0].value = parseInt(document.getElementsByName("Text20")[0].value, 10) - 1;
				document.getElementsByName("Text21")[0].value = 59;					
				}
				
				// add one second to the timesec counter
				document.getElementsByName("timesec")[0].value = parseInt(document.getElementsByName("timesec")[0].value, 10) + 1;
			
				// reduce score by the time spent
				if (parseInt(document.getElementsByName("score")[0].value, 10) > 9) {
							document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) - 9;
				}
				else { 
							document.getElementsByName("score")[0].value = 0;
					}
						
		}
		
		function timer2() {

			if (parseInt(document.getElementsByName("Text21")[0].value, 10) < 10) {
				Text21b = "0" + document.getElementsByName("Text21")[0].value;
			}
			else {
				Text21b = document.getElementsByName("Text21")[0].value;
			}
			document.getElementsByName("Label1")[0].value = document.getElementsByName("Text20")[0].value + " : " + Text21b;			
			
		}		
	
		
		function rando(p) {
  			return Math.floor(Math.random() * p );
		}
		
		
		function sendnumber(n) {
			
			var linu = document.getElementsByName("Text9")[0].value ; // current line number
			
				if (document.getElementsByName("Text" + linu)[0].value.length <= 2) { // no more than 3 numbers
			
						if(document.getElementsByName("Text23")[0].value == n || document.getElementsByName("Text7")[0].value == n){
								
									// do nothing right now : the selected digit is already present
						}
						else {
							// add last and before last numbers
							document.getElementsByName("Text23")[0].value = document.getElementsByName("Text7")[0].value;
							document.getElementsByName("Text7")[0].value = n;
							
							
									// play one of the 3 random beep (for more realism)				
									bip = rando(3);
									playsound("beep"+(bip+1));
	
			
							
									// add the last typed number in the right textbox
									for (var u = 0; u <= 6; u++) {
								  			if (parseInt(document.getElementsByName("Text9")[0].value, 10) == u) {
								  				document.getElementsByName("Text"+u)[0].value += n;
								  				}	
									}				
							
							
						}
		
				
				}
					if (document.getElementsByName("Text" + linu)[0].value.length == 3)  { 
						
						if (document.getElementById("checkval").checked == true) {
						valbutton();
						}
					
					}
	
		}


		function resetnow() {
			
					
					// first reset : initialise
					if (parseInt(document.getElementsByName("Text10")[0].value, 10) == 0) {
					
								
					
								// hide the debug table at start
								document.getElementById('debugtable').style.visibility = "hidden";

						
								// set random wall texture
								urlwall = "images/texture_mur" + (rando(6) + 1) + ".jpg";
								document.body.style.backgroundImage = "url("+urlwall+")";

								// set random machine texture
								urlmachine = "images/metal_back" + (rando(6) + 1) + ".jpg";
								document.getElementById('fondtable').style.backgroundImage = "url("+urlmachine+")";
						
						
								// launch timers
								myTimer1Start();
								myTimer2Start();
								
						
								
								
								
								
						
					}
			
			
					// add 1 step
					if (parseInt(document.getElementsByName("Text10")[0].value, 10) < 8) {
						document.getElementsByName("Text10")[0].value = parseInt(document.getElementsByName("Text10")[0].value, 10) + 1;
						document.getElementsByName("Label19")[0].value = "STEP " + parseInt(document.getElementsByName("Text10")[0].value, 10) + "/8";
						playsound("door2");
					}			
					document.getElementsByName("Text9")[0].value = 1;

					// reset textboxes
					for (var v = 1; v <= 6; v++) {						
										document.getElementsByName("Text"+v)[0].value = "";										  
					}
	
	
					// reset labels
					for (var w = 2; w <= 13; w++) {						
										if ( w != 12 ) {
										document.getElementsByName("Label"+w)[0].value = "";
										 }										  
					}



				// generate 3 digits numbers random code
	
				document.getElementsByName("Text14")[0].value = rando(9);
	
				
				do {
	  					document.getElementsByName("Text15")[0].value = rando(9);
					} while (document.getElementsByName("Text15")[0].value == document.getElementsByName("Text14")[0].value);
	
				do {
	  					document.getElementsByName("Text16")[0].value = rando(9);
					} while (document.getElementsByName("Text16")[0].value == document.getElementsByName("Text15")[0].value || document.getElementsByName("Text16")[0].value == document.getElementsByName("Text14")[0].value);
	


				// find tips to help the player
	
				tip = rando(3);
	
				if(tip == 0){
					t1a = document.getElementsByName("Text14")[0].value;					
					
							if (langage == "FR") {
									sentence1 = " existe mais n'est pas le dernier chiffre";
							}
							else { 
									sentence1 = " exist but isn't the last digit";
							}
					
					document.getElementsByName("Label13")[0].value = t1a + sentence1;
				}
	
				if(tip == 1){
					t1a = document.getElementsByName("Text15")[0].value;

							if (langage == "FR") {
									sentence2 = " existe mais n'est pas le dernier chiffre";
							}
							else { 
									sentence2 = " exist but isn't the last digit";
							}

					document.getElementsByName("Label13")[0].value = t1a + sentence2;
				}
	
				if(tip == 2){
					t1a = document.getElementsByName("Text16")[0].value;

							if (langage == "FR") {
									sentence3 = " existe et est le dernier chiffre";
							}
							else { 
									sentence3 = " exist and is the last digit";
							}

					document.getElementsByName("Label13")[0].value = t1a + sentence3;
				}
	
	
				// find a digit that does not exist in the combination
	
				do {
	  					tip2 = rando(9);
					} while (tip2 == document.getElementsByName("Text14")[0].value || tip2 == document.getElementsByName("Text15")[0].value || tip2 == document.getElementsByName("Text16")[0].value);
	
				if (tip2 >= 0 && tip2 <= 9) {
					
							if (langage == "FR") {
									sentence4 = " n'existe pas";
							}
							else { 
									sentence4 = " does not exist";
							}
					 
						document.getElementsByName("Label13")[0].value += ", " + tip2 + sentence4;
					}


			
		} // end resetnow


	
		//open or close the door
		function openclosedoor(n) {
					myTimer1Stop();
					myTimer2Stop();
					document.getElementsByName("Label1")[0].value = n;

					if (n == "OPEN") {
						
						playsound("open");
						
							
						
							document.getElementsByName("Label1")[0].style.color = "#00FF04";
							document.getElementsByName("Label1")[0].style.backgroundColor = "#008E02";
							document.getElementsByName("Label16")[0].style.color = "#00FF04";
							document.getElementsByName("Label16")[0].style.backgroundColor = "#008E02";						
							
							if (langage == "FR") {
									sentence5 = "Félicitation la porte est ouverte !";
							}
							else { 
									sentence5 = "Congratulation the door is open !";
							}
							
							document.getElementsByName("Label13")[0].value = sentence5;
							
						 
						 
						 
						 // record score and elapsed time
						 
						  document.getElementById("1pix").src = "txt.php?mode=addscore&cnick=" + document.getElementById("currentnick").value + "&score=" + document.getElementById("score").value + "&timesec=" + document.getElementById("timesec").value + "&cs4=" + document.getElementById("cs4").value;
						 
						 
						 }



					document.getElementsByName("Text20")[0].value = 0;
					document.getElementsByName("Text21")[0].value = 0;


					
					if (n == "CLOSE") {
						document.getElementsByName("score")[0].value = 0;
						
						playsound("close");
						
						ccode = document.getElementsByName("Text14")[0].value;
						ccode += document.getElementsByName("Text15")[0].value;
						ccode += document.getElementsByName("Text16")[0].value;

							if (langage == "FR") {
									sentence6 = "Le code correct était";
							}
							else { 
									sentence6 = "The correct 3 digits code was ";
							}
						
						document.getElementsByName("Label13")[0].value = sentence6 + ccode;
						
						
						 }
						 

		}
		
		
		

		function comparedoor() {
		
				// compare user code && door code
				
				if (document.getElementsByName("Text10")[0].value != 1) {
							var tiret = "-";
					 }
					 else { 
					 		var tiret = "";
					 	}
					 
				
				// the final user code is ok : open the door
				if(document.getElementsByName("Text10")[0].value == 8 && document.getElementsByName("Text11")[0].value == document.getElementsByName("Text14")[0].value && document.getElementsByName("Text12")[0].value == document.getElementsByName("Text15")[0].value && document.getElementsByName("Text13")[0].value == document.getElementsByName("Text16")[0].value){
							document.getElementsByName("Label16")[0].value += tiret + document.getElementsByName("Text14")[0].value + document.getElementsByName("Text15")[0].value + document.getElementsByName("Text16")[0].value;
							openclosedoor("OPEN");
							return;
				}

				// the current user code is ok : go to next step
				if(document.getElementsByName("Text11")[0].value == document.getElementsByName("Text14")[0].value && document.getElementsByName("Text12")[0].value == document.getElementsByName("Text15")[0].value && document.getElementsByName("Text13")[0].value == document.getElementsByName("Text16")[0].value){
							document.getElementsByName("Label16")[0].value += tiret + document.getElementsByName("Text14")[0].value + document.getElementsByName("Text15")[0].value + document.getElementsByName("Text16")[0].value;
							resetnow();
							return;
				}

				 
				if(document.getElementsByName("Text9")[0].value == 6){
							openclosedoor("CLOSE");
							return;
				}
				

				// the final code is not full : close the door
				if(document.getElementsByName("Text9")[0].value == 6 && document.getElementsByName("Text10")[0].value == 8){
							openclosedoor("CLOSE");
							return;
				}
				

				// add 1 to current line
				document.getElementsByName("Text9")[0].value = parseInt(document.getElementsByName("Text9")[0].value, 10) + 1;
				
				checkorder(); 
				return;				



		} // end comparedoor

		
		
		
		function checkorder() {
			
			// compare codes if difference = 0 0 0 then the code is correct

			document.getElementsByName("Text17")[0].value = parseInt(document.getElementsByName("Text11")[0].value, 10) - parseInt(document.getElementsByName("Text14")[0].value, 10); 
			document.getElementsByName("Text18")[0].value = parseInt(document.getElementsByName("Text12")[0].value, 10) - parseInt(document.getElementsByName("Text15")[0].value, 10);
			document.getElementsByName("Text19")[0].value = parseInt(document.getElementsByName("Text13")[0].value, 10) - parseInt(document.getElementsByName("Text16")[0].value, 10);

			document.getElementsByName("Text8")[0].value = 0;

			if(document.getElementsByName("Text17")[0].value == 0){
			document.getElementsByName("Text8")[0].value = parseInt(document.getElementsByName("Text8")[0].value, 10) + 1;
			}

			if(document.getElementsByName("Text18")[0].value == 0){
			document.getElementsByName("Text8")[0].value = parseInt(document.getElementsByName("Text8")[0].value, 10) + 1;
			}

			if(document.getElementsByName("Text19")[0].value == 0){
			document.getElementsByName("Text8")[0].value = parseInt(document.getElementsByName("Text8")[0].value, 10) + 1;
			}

			// draw "In order" symbols



				for (var x = 1; x <= 6; x++) {


							if(document.getElementsByName("Text8")[0].value == 0 && document.getElementsByName("Text9")[0].value == x + 1){
							document.getElementsByName("Label"+ x * 2)[0].value = "";
							document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) - 200;
							playsound("fact");
							}
				
							if(document.getElementsByName("Text8")[0].value == 1 && document.getElementsByName("Text9")[0].value == x + 1){
							document.getElementsByName("Label"+ x * 2)[0].value = "l";
							document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) + 200;
							playsound("ok");
							}
				
							if(document.getElementsByName("Text8")[0].value == 2 && document.getElementsByName("Text9")[0].value == x + 1){
							document.getElementsByName("Label"+ x * 2)[0].value = "ll";
							document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) + 600;
							playsound("ok");
							}

				}




			checknotorder(); 
		}
		

		
		function checknotorder() {
				
			// draw "Not in order" symbols

			document.getElementsByName("Text22")[0].value = 0;

			if(document.getElementsByName("Text11")[0].value == document.getElementsByName("Text15")[0].value || document.getElementsByName("Text11")[0].value == document.getElementsByName("Text16")[0].value){
			document.getElementsByName("Text22")[0].value = parseInt(document.getElementsByName("Text22")[0].value, 10) + 1;
			}

			if(document.getElementsByName("Text12")[0].value == document.getElementsByName("Text14")[0].value || document.getElementsByName("Text12")[0].value == document.getElementsByName("Text16")[0].value){
			document.getElementsByName("Text22")[0].value = parseInt(document.getElementsByName("Text22")[0].value, 10) + 1;
			}

			if(document.getElementsByName("Text13")[0].value == document.getElementsByName("Text14")[0].value || document.getElementsByName("Text13")[0].value == document.getElementsByName("Text15")[0].value){
			document.getElementsByName("Text22")[0].value = parseInt(document.getElementsByName("Text22")[0].value, 10) + 1;
			}


				
				for (var y = 1; y <= 5; y++) {

						if(document.getElementsByName("Text22")[0].value == 0 && document.getElementsByName("Text9")[0].value == y + 1){
						document.getElementsByName("Label" + ( y * 2 + 1))[0].value = "";
						document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) - 200;
						}
			
						if(document.getElementsByName("Text22")[0].value == 1 && document.getElementsByName("Text9")[0].value == y + 1){
						document.getElementsByName("Label" + ( y * 2 + 1))[0].value = "n";
						document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) + 100;
						}
			
						if(document.getElementsByName("Text22")[0].value == 2 && document.getElementsByName("Text9")[0].value == y + 1){
						document.getElementsByName("Label" + ( y * 2 + 1))[0].value = "nn";
						document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) + 200;
						}
			
						if(document.getElementsByName("Text22")[0].value == 3 && document.getElementsByName("Text9")[0].value == y + 1){
						document.getElementsByName("Label" + ( y * 2 + 1))[0].value = "nnn";
						document.getElementsByName("score")[0].value = parseInt(document.getElementsByName("score")[0].value, 10) + 400;
						}
			
			
				}
				



		} // end checknotorder

		
		
		function delbutton() {
				document.getElementsByName("Text7")[0].value = "99";
				document.getElementsByName("Text23")[0].value = "99";


				// delete current textbox
				for (var t = 0; t <= 6; t++) {
						if(document.getElementsByName("Text9")[0].value == t){
									document.getElementsByName("Text"+t)[0].value = "";
						}				  
				}

		}
		
		
		
		
		function valbutton() {
						
				document.getElementsByName("Text7")[0].value = "99";
				document.getElementsByName("Text23")[0].value = "99";

				// add the values to compare the both codes
				var cli = document.getElementsByName("Text9")[0].value;

				if(document.getElementsByName("Text"+cli)[0].value.length == 3){
						document.getElementsByName("Text11")[0].value = document.getElementsByName("Text"+cli)[0].value.substr(0, 1); 
						document.getElementsByName("Text12")[0].value = document.getElementsByName("Text"+cli)[0].value.substr(1, 1);
						document.getElementsByName("Text13")[0].value = document.getElementsByName("Text"+cli)[0].value.substr(2, 1);

						var playercounted;
						if (playercounted == false) {
						// a new player is someone who has already use the validation, so add 1 to the player number variable
						document.getElementById("1pix").src = "txt.php?mode=addplayer&cs4=" + document.getElementById("cs4").value;
						playercounted = true;
					}

						
				}else if(document.getElementsByName("Text"+cli)[0].value.length < 3){
					
							if (langage == "FR") {
									sentence7 = "3 chiffres sont requis pour valider";
							}
							else { 
									sentence7 = "Validation require 3 digits";
							}
					
					alert(sentence7);	
					return;
				}

				comparedoor(); 
		}
	

		
			function setCookie(cname,cvalue,exdays) {
			  var d = new Date();
			  d.setTime(d.getTime() + (exdays*24*60*60*1000));
			  var expires = "expires=" + d.toGMTString();
			  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			
		
			function setCookieAuVal() {
			  var d = new Date();
			  d.setTime(d.getTime() + (365*24*60*60*1000));
			  var expires = "expires=" + d.toGMTString();
					if (document.getElementById("checkval").checked == true) {
						cvalue = "true";
					}
					else {
						cvalue = "false";
					}
			  document.cookie = "auval=" + cvalue + ";" + expires + ";path=/";
			}		
		
			function getCookie(cname) {
			  var name = cname + "=";
			  var decodedCookie = decodeURIComponent(document.cookie);
			  var ca = decodedCookie.split(';');
			  for(var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
				  c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
				  return c.substring(name.length, c.length);
				}
			  }
			  return "";
			}

			function checkCookie() {
			  var nick=getCookie("nickname");
			  if (nick != "") {
							//alert("Welcome again " + nick);
			  } else {
				 
				 
				 			if (langage == "FR") {
									sentence8 = "Veuillez entrer votre pseudo:";
							}
							else { 
									sentence8 = "Please enter your nickname:";
							}
				 
				 			nick = prompt(sentence8,"");
				 
				 if (nick != "" && nick != null) {
				   setCookie("nickname", nickname, 365);
				 }
			  }
			}		

							

				function helpwindow (n) {
				   hwin=window.open('helpwindow.php?langage=' + langage,'image','toolbar=1,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,copyhistory=0,width=900,height=700');
				   hwin.focus (); 
				}
		
		
    </script>


</head>
<body onload="resetnow();">
	
<table border="0" align="center" id="fondtable" class="fondtable">
  <tbody>
    <tr>
      <td colspan="4" align="center"><img src="images/keycode24.png"></td>
    </tr>
    <tr>
      <td colspan="4" align="center">
      	<input name="Label1" type="text" class="timer" id="Label1" style="" title="Total remaining time" value="9 : 59" size="6" readonly>
      	&nbsp;&nbsp;
        <input name="score" type="text" class="score" id="score" title="Score" value="9999" size="3" readonly>
      </td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input name="Label16" type="text" class="codelong" id="Label16" title="Final Keycode (24 digits)" size="43" maxlength="43" readonly></td>
    </tr>
    <tr>
      <td colspan="4" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><table width="90%" border="0" align="center">
        <tbody>
          <tr>
            <td rowspan="2" align="right"><input name="Text1" type="text" class="saisie" id="Text1" title="try 1" size="3" maxlength="3" readonly></td>
            <td><input name="Label2" type="text" class="order" id="Label2" title="in order" value="lll" size="3" readonly></td>
            <td rowspan="2" align="right"><input name="Text4" type="text" class="saisie" id="Text4" title="try 4" size="3" maxlength="3" readonly></td>
            <td><input name="Label8" type="text" class="order" id="Label8" title="in order" value="lll" size="3" readonly></td>
          </tr>
          <tr>
            <td><input name="Label3" type="text" class="notorder" id="Label3" title="not in order" value="nnn" size="3" readonly></td>
            <td><input name="Label9" type="text" class="notorder" id="Label9" title="not in order" value="nnn" size="3" readonly></td>
          </tr>
          <tr>
            <td rowspan="2" align="right"><input name="Text2" type="text" class="saisie" id="Text2" title="try 2" size="3" maxlength="3" readonly></td>
            <td><input name="Label4" type="text" class="order" id="Label4" title="in order" value="lll" size="3" readonly></td>
            <td rowspan="2" align="right"><input name="Text5" type="text" class="saisie" id="Text5" title="try 5" size="3" maxlength="3" readonly></td>
            <td><input name="Label10" type="text" class="order" id="Label10" title="in order" value="lll" size="3" readonly></td>
          </tr>
          <tr>
            <td><input name="Label5" type="text" class="notorder" id="Label5" title="not in order" value="nnn" size="3" readonly ondblclick="document.getElementById('debugtable').style.visibility='visible';" ></td>
            <td><input name="Label11" type="text" class="notorder" id="Label11" title="not in order" value="nnn" size="3" readonly></td>
          </tr>
          <tr>
            <td rowspan="2" align="right"><input name="Text3" type="text" class="saisie" id="Text3" title="try 3" size="3" maxlength="3" readonly></td>
            <td><input name="Label6" type="text" class="order" id="Label6" title="in order" value="lll" size="3" readonly></td>
            <td rowspan="2" align="right"><input name="Text6" type="text" class="saisie" id="Text6" title="try 6" size="3" maxlength="3" readonly></td>
            <td rowspan="2" align="right"><input name="Label19" type="text" class="steps2" id="Label19" value="Step (1-8)" size="10" readonly></td>
          </tr>
          <tr>
            <td><input name="Label7" type="text" class="notorder" id="Label7" title="not in order" value="nnn" size="3" readonly></td>
          </tr>
        </tbody>
	  </table> </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input name="Label13" type="text" class="indications" id="Label13" title="Information panel" size="46" maxlength="46" readonly></td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><table width="60%" border="0" align="center">
        <tbody>
          <tr>
            <td width="33%" align="center"><input name="Command1" onclick="sendnumber(1);" type="button" class="nombres" id="Command1" value="&nbsp;1&nbsp;"></td>
            <td width="33%" align="center"><input name="Command2" onclick="sendnumber(2);" type="button" class="nombres" id="Command2" value="&nbsp;2&nbsp;"></td>
            <td width="33%" align="center"><input name="Command3" onclick="sendnumber(3);" type="button" class="nombres" id="Command3" value="&nbsp;3&nbsp;"></td>
          </tr>
          <tr>
            <td align="center"><input name="Command4" onclick="sendnumber(4);" type="button" class="nombres" id="Command4" value="&nbsp;4&nbsp;"></td>
            <td align="center"><input name="Command5" onclick="sendnumber(5);" type="button" class="nombres" id="Command5" value="&nbsp;5&nbsp;"></td>
            <td align="center"><input name="Command6" onclick="sendnumber(6);" type="button" class="nombres" id="Command6" value="&nbsp;6&nbsp;"></td>
          </tr>
          <tr>
            <td align="center"><input name="Command7" onclick="sendnumber(7);" type="button" class="nombres" id="Command7" value="&nbsp;7&nbsp;"></td>
            <td align="center"><input name="Command8" onclick="sendnumber(8);" type="button" class="nombres" id="Command8" value="&nbsp;8&nbsp;"></td>
            <td align="center"><input name="Command9" onclick="sendnumber(9);" type="button" class="nombres" id="Command9" value="&nbsp;9&nbsp;"></td>
          </tr>
          <tr>
            <td align="center"><input name="Commanddel" onclick="delbutton();" type="button" class="nombres2" id="Commanddel" title="Delete current 3 digits code" value="DEL"></td>
            <td align="center"><input name="Command0" onclick="sendnumber(0);" type="button" class="nombres" id="Command0" value="&nbsp;0&nbsp;"></td>
            <td align="center"><input name="Commandval" onclick="valbutton();" type="button" class="nombres3" id="Commandval" title="Validate current 3 digits code" value="VAL"></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><input type="checkbox" name="checkval" id="checkval" class="autoval" title="Automatic validation after 3 digits typed" onClick="setCookieAuVal();">
              <label for="checkval" class="autoval" id="checkvallabel" title="Automatic validation after 3 digits typed">Auto VAL</label></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<br>

<center>
	
<input name="howtoplay" type="button" id="howtoplay" title="How to play Keycode24 ?" value="How to play Keycode24 ?" onclick="helpwindow();">	
&nbsp;&nbsp;&nbsp;
<input name="language" type="button" id="language" title="Français" value="Français" onclick="changelanguage();"><br><br>	
<span id="highscorestitle" class="hiscores">Highscores</span><br>
<span id="highscores" class="hiscores"> </span>
</center>

<br><br><br><br><br><br><br><br><br><br>
<div id="debugtable">


<table width="600" border="0" align="center" class="fondtable2">
  <tbody>
    <tr>
      <td colspan="2" align="right"><input type="button" name="Check1" id="Check1" value="X hide debug" onclick="document.getElementById('debugtable').style.visibility = 'hidden';"></td>
    </tr>
    <tr>
      <td width="50%"><input name="Text8" type="text" id="Text8" size="3" maxlength="3">
        <input type="button" name="Command15" id="Command15" value="In Order">
        <br>
        <br>
        <input name="Text22" type="text" id="Text22" size="3" maxlength="3">
        <input type="button" name="Command16" id="Command16" value="Not In Order">
        <br>
        <span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">Time</span><br>
        <input name="Text20" type="text" id="Text20" value="9" size="6">
        <input name="Text21" type="text" id="Text21" value="59" size="6">
        <br>
        <span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">Timesec<br>
        
        <input name="timesec" type="text" id="timesec" value="0" size="3" maxlength="3">
        </span><br></td>
      <td><span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">Keycode</span><br>
        <table border="0">
        <tbody>
          <tr>
            <td><span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">User</span></td>
            <td>
              <input name="Text11" type="text" id="Text11" size="6">
            </td>
            <td>
              <input name="Text12" type="text" id="Text12" size="6">
            </td>
            <td>
              <input name="Text13" type="text" id="Text13" size="6">
            </td>
          </tr>
          <tr>
            <td><span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">Door</span></td>
            <td>
              <input name="Text14" type="text" id="Text14" size="6">
            </td>
            <td>
              <input name="Text15" type="text" id="Text15" size="6">
            </td>
            <td>
              <input name="Text16" type="text" id="Text16" size="6">
            </td>
          </tr>
          <tr>
            <td><span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">Diff</span></td>
            <td>
              <input name="Text17" type="text" id="Text17" size="6">
            </td>
            <td>
              <input name="Text18" type="text" id="Text18" size="6">
            </td>
            <td>
              <input name="Text19" type="text" id="Text19" size="6">
            </td>
          </tr>
        </tbody>
      </table>  
            
      <br>
      
      
      <input type="button" name="Command12" id="Command12" value="close door" onclick="openclosedoor('CLOSE');">
      <input type="button" name="Command11" id="Command11" value="open door" onclick="openclosedoor('OPEN');"></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><span style="font-family: Arial; font-weight: bold; color: #FFFFFF;">
        <input type="button" name="Command14" id="Command14" value="New entry">
        <span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">Last entry</span>
        <span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">
          <input name="Text7" type="text" id="Text7" value="99" size="6">
          </span><span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">Last&nbsp;last&nbsp;entry
          <input name="Text23" type="text" id="Text23" value="99" size="6">
          <br>
          </span><br>
        </span><span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">Current line (1-6)</span>
        	<span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">
          <input name="Text9" type="text" id="Text9" value="1" size="6">
          </span><span style="font-weight: bold; font-family: Arial; color: #FFFFFF;">Step (1-8)
          <input name="Text10" type="text" id="textfield19" value="0" size="6">
          <input type="button" name="Command10" id="Command10" value="Add 1 step" onclick="resetnow();">
        </span></td>
    </tr>
    
     <tr>
      <td colspan="2">
      	
      	<input type="button" value="test currentnick" onclick="alert(document.getElementById('currentnick').value);">
				<input type="button" value="delete nickname cookie" onclick="document.cookie = 'nickname=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;'">
      	
      </td>
    </tr>
    
    </tbody>
</table>


</div> <!-- fin debugtable -->



	<script language="javascript">
		
		// check the auto val checkbox if the user use it usually
		cauval = getCookie("auval");
		if (cauval == "true") {
				document.getElementById("checkval").checked = true;
			}			



							var client = new XMLHttpRequest();			
							client.onreadystatechange = function() {
										if (client.readyState === 4 && client.status === 200) {
													var rawScores = client.responseText;
													
															rawScores2 = rawScores.slice(0, rawScores.length - 1);
															rawScores3 = rawScores2.split("\n");
															
																		for (i=0; i<(rawScores3.length); i++) {
																			subArray = rawScores3[i].split(",");
																			rawScores3[i] = subArray;

																		}
																		
																		
																					rawScores3.sort(compareSecondColumn);
						
																					function compareSecondColumn(a, b) {
																					    if (a[1] === b[1]) {
																					        return 0;
																					    }
																					    else {
																					        return (a[1] > b[1]) ? -1 : 1;
																					    }
																					}
				
				
																		for (i=0; i<rawScores3.length; i++) {												
																			document.getElementById("highscores").innerHTML += rawScores3[i][0] + " " + rawScores3[i][1] + " points in " + rawScores3[i][2] + " seconds<br>";
																		}
																
															
										}
							}
							client.open('GET', 'scores.txt');
							client.send();

				
	
    </script>



<?php



							// randomize
							function make_seed()
							{
							  list($usec, $sec) = explode(' ', microtime());
							  return $sec + $usec * 1000000;
							}
							
						
						$maxi=20;
						$mini=3;
						mt_srand(make_seed());
						$cs1a = intval(($maxi-$mini+1)*(mt_rand(0, 9999999) / 9999999)+$mini);
						$cs1b = $cs1a * 47;
						
						$cs2 = (intval(date("j")) * (intval(date("n")))+237);
						
						$maxi=26;
						$mini=3;
						mt_srand(make_seed());
						$cs3a = intval(($maxi-$mini+1)*(mt_rand(0, 9999999) / 9999999)+$mini);
						$cs3b = $cs3a * 37;
						
						$cs4 = $cs1b . $cs2 . $cs3b;



						echo "<input type=\"hidden\" id=\"langage\" value=\"EN\">\n";
						echo "<input type=\"hidden\" id=\"playernum\" value=\"0\">\n";
						echo "<input type=\"hidden\" id=\"currentnick\" value=\"Player\">\n";
						echo "<input type=\"hidden\" id=\"cs4\" value=\"" . $cs4 . "\">\n";
						echo "<img id=\"1pix\" width=\"1\" weight=\"1\" border=\"0\">\n";
						
						
						
?>


	<script language="javascript">

				
				var client2 = new XMLHttpRequest();
				client2.open('GET', 'player_number.txt');
				client2.onreadystatechange = function() {
				  document.getElementById("playernum").value = client2.responseText;
				}
				client2.send();	


							
				function nicknam() {
							

						  var nick=getCookie("nickname");
						  if (nick != "") {
											document.getElementById("currentnick").value = nick;
						  } else {

											
											if (langage == "FR") {
													sentence9 = "Actuellement votre pseudo est Player" + document.getElementById("playernum").value + " \n Voulez vous définir votre propre pseudo pour les scores ? \n (maximum 20 caractères)";
											}
											else { 
													sentence9 = "Actually your name is Player" + document.getElementById("playernum").value + " \n Do you want to define your own nickname for the highscores ? \n (maximum 20 characters)";
											}
											
											var nick = prompt(sentence9);
											
											
										
										 if (nick != "" && nick != null) {
										 			nick.slice(0, 20); // keep only the 20 first characters
										   		setCookie("nickname", nick, 365);
										   		document.getElementById("currentnick").value = nick;
										 }
										 else { 
										 			
										 			tempnick = "Player" + document.getElementById("playernum").value;
										 			setCookie("nickname", tempnick, 1);
										 			document.getElementById("currentnick").value = tempnick;
										 	
										 	}
							 
						  }



	
				}
	
				setTimeout(nicknam, 500); // wait 500 ms else some variables are missing
				

				
				
				
	
    </script>



</body>
</html>


