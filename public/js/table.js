var numImport=0;
var numExport=0;



function addRowsOfImport(){

		var numCol = new Array();
		var node = document.getElementById('table').childNodes[1];
		var newrow = document.createElement("tr");
		
		newCol0 = document.createElement("td");
		newCol0.innerHTML = numImport+1;
		newrow.appendChild(newCol0);
	
		newCol1 = document.createElement("td");
		newCol1.innerHTML = document.getElementsByName('type')[0].value;
		newrow.appendChild(newCol1);

		newCol2 = document.createElement("td");
		newCol2.innerHTML = document.getElementsByName('commonName')[0].value;
		newrow.appendChild(newCol2);

		newCol3 = document.createElement("td");
		newCol3.innerHTML = document.getElementsByName('scienceName')[0].value;
		newrow.appendChild(newCol3);

		newCol4 = document.createElement("td");
		newCol4.innerHTML = document.getElementsByName('unit')[0].value;
		newrow.appendChild(newCol4);

		newCol5 = document.createElement("td");
		newCol5.innerHTML = document.getElementsByName('amount')[0].value;
		newrow.appendChild(newCol5);

		newCol6 = document.createElement("td");
		newCol6.innerHTML = document.getElementsByName('value')[0].value;
		newrow.appendChild(newCol6);

		newCol7 = document.createElement("td");
		newCol7.innerHTML = document.getElementsByName('departureCountry')[0].value;
		newrow.appendChild(newCol7);

		newCol8 = document.createElement("td");
		newCol8.innerHTML = document.getElementsByName('importedCheckpoint')[0].value;
		newrow.appendChild(newCol8);

		newCol9 = document.createElement("td");
		newCol9.innerHTML = document.getElementsByName('importedDate')[0].value;
		newrow.appendChild(newCol9);
		node.appendChild(newrow);

		numImport++;
		emptyFill();
}
function addRowsOfExport(){

		var numCol = new Array();
		var node = document.getElementById('table').childNodes[1];
		var newrow = document.createElement("tr");
		
		newCol0 = document.createElement("td");
		newCol0.innerHTML = numImport+1;
		newrow.appendChild(newCol0);
	
		newCol1 = document.createElement("td");
		newCol1.innerHTML = document.getElementsByName('type')[0].value;
		newrow.appendChild(newCol1);

		newCol2 = document.createElement("td");
		newCol2.innerHTML = document.getElementsByName('commonName')[0].value;
		newrow.appendChild(newCol2);

		newCol3 = document.createElement("td");
		newCol3.innerHTML = document.getElementsByName('scienceName')[0].value;
		newrow.appendChild(newCol3);

		newCol4 = document.createElement("td");
		newCol4.innerHTML = document.getElementsByName('unit')[0].value;
		newrow.appendChild(newCol4);

		newCol5 = document.createElement("td");
		newCol5.innerHTML = document.getElementsByName('amount')[0].value;
		newrow.appendChild(newCol5);

		newCol6 = document.createElement("td");
		newCol6.innerHTML = document.getElementsByName('value')[0].value;
		newrow.appendChild(newCol6);

		newCol7 = document.createElement("td");
		newCol7.innerHTML = document.getElementsByName('departureCountry')[0].value;
		newrow.appendChild(newCol7);

		newCol8 = document.createElement("td");
		newCol8.innerHTML = document.getElementsByName('importedCheckpoint')[0].value;
		newrow.appendChild(newCol8);

		newCol9 = document.createElement("td");
		newCol9.innerHTML = document.getElementsByName('importedDate')[0].value;
		newrow.appendChild(newCol9);
		node.appendChild(newrow);

		numImport++;
		emptyFill();
}

function emptyFill(){
	var num = document.getElementsByTagName('input').length;
	for(var i=0;i<num;i++){
		document.getElementsByTagName('input')[i].value='';
	}
}
