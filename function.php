Versione per GitHub del file modificata da Mario e rivista da Fabio
<php

/*addizione*/

function addizione (n1,n2) {
	return n1+n2;
	}
	
/*Sottrazione*/

function sottrazione (n1,n2) {
	return n1-n2;
	}	
	
/*Moltiplicazione*/

function moltiplicazione (n1,n2) {
	return n1*n2;
	}

/*divisione*/

function divisione (n1,n2) {
	if(n2 !== 0)
	return n1/n2;
	}
	else {
		return "Error";
	}
}

?>
