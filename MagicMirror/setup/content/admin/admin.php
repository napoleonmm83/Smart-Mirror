<?php




$Kompliment = $_POST['Kompliment'];
$GEO = $_POST['GEO'];
$COM0 = $_POST['com0'];
$COM1 = $_POST['com1'];
$COM2 = $_POST['com2'];
$COM3 = $_POST['com3'];
$COM4 = $_POST['com4'];
$COM5 = $_POST['com5'];
$COM6 = $_POST['com6'];
$COM7 = $_POST['com7'];
$COM8 = $_POST['com8'];
$COM9 = $_POST['com9'];
$COM10 = $_POST['com10'];


$text = "// for navigator language
var lang = window.navigator.language;
// you can change the language
var lang = 'de';


var weatherParams = {
    'q':'$GEO',
    'units':'metric',
    'lang':lang
};
document.getElementById('msg').value = weatherParams.q;
document.getElementById('msg').innerHTML = weatherParams.q;

// compliments:
var compliments = [
            '$COM0',
            '$COM1',
            '$COM2',
            '$COM3',
            '$COM4',
            '$COM5',
            '$COM6',
            '$COM7',
			'$COM8',
			'$COM9',
			'$COM10',
        ];
document.getElementById('com0').value = compliments[0];				
document.getElementById('com1').value = compliments[1];
document.getElementById('com2').value = compliments[2];
document.getElementById('com3').value = compliments[3];
document.getElementById('com4').value = compliments[4];
document.getElementById('com5').value = compliments[5];
document.getElementById('com6').value = compliments[6];
document.getElementById('com7').value = compliments[7];
document.getElementById('com8').value = compliments[8];
document.getElementById('com9').value = compliments[9];
document.getElementById('com10').value = compliments[10];

document.getElementById('com0').innerHTML = compliments[0];				
document.getElementById('com1').innerHTML = compliments[1];
document.getElementById('com2').innerHTML = compliments[2];
document.getElementById('com3').innerHTML = compliments[3];
document.getElementById('com4').innerHTML = compliments[4];
document.getElementById('com5').innerHTML = compliments[5];
document.getElementById('com6').innerHTML = compliments[6];
document.getElementById('com7').innerHTML = compliments[7];
document.getElementById('com8').innerHTML = compliments[8];
document.getElementById('com9').innerHTML = compliments[9];
document.getElementById('com10').innerHTML = compliments[10];

"
; // Dateiinhalt
$dateiname = "config.js"; // Name der Datei
// Datei �ffnen, wenn nicht vorhanden dann wird die Datei erstellt.
$handler = fopen($dateiname , "w+");
// Dateiinhalt in die Datei schreiben
fwrite($handler, $text);
fclose($handler); // Datei schlie�en 
header("location:javascript://history.go(-1)");
?>