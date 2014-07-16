// for navigator language
var lang = window.navigator.language;
// you can change the language
var lang = 'de';


var weatherParams = {
    'q':'Grabs,Switzerland',
    'units':'metric',
    'lang':lang
};
document.getElementById('msg').value = weatherParams.q;
document.getElementById('msg').innerHTML = weatherParams.q;

// compliments:
var compliments = [
            'Hey, handsome!',
            'Hi, sexy!',
            'Hello, beauty!',
            'You look sexy!',
            'Wow, you look hot!',
            'Looking good today!',
            'You look nice!',
            'Enjoy your day!',
			'',
			'',
			'',
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

