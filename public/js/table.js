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
		// newCol1.innerHTML = "<label id='"+numImport"'></label>";
		// newCol1.innerHTML = "<input type='text' name='Type"+numImport+"'>";
		newrow.appendChild(newCol1);

		newCol2 = document.createElement("td");
		newCol2.innerHTML = "<input type='text' name='Name"+numImport+"'>";
		newrow.appendChild(newCol2);

		newCol3 = document.createElement("td");
		newCol3.innerHTML = "<input type='text' name='ScienceName"+numImport+"'>";
		newrow.appendChild(newCol3);

		newCol4 = document.createElement("td");
		newCol4.innerHTML = "<input type='text' name ='Unit"+numImport+"'>";
		newrow.appendChild(newCol4);

		newCol5 = document.createElement("td");
		newCol5.innerHTML = "<input type='text' name ='Origin"+numImport+"'>";
		newrow.appendChild(newCol5);

		newCol6 = document.createElement("td");
		newCol6.innerHTML = "<input type='text' name ='Amount"+numImport+"'>";
		newrow.appendChild(newCol6);

		node.appendChild(newrow);
		numImport++;
}

function addRowsOfExport()
{
		var node = document.getElementById('table').childNodes[1];
		var newrow = document.createElement("tr");
		
		newCol0 = document.createElement("td");
		newCol0.innerHTML = i+1;
		newrow.appendChild(newCol0);
	
		newCol1 = document.createElement("td");
		newCol1.innerHTML = "<input type='text' name='Type"+i+"'>";
		newrow.appendChild(newCol1);

		newCol2 = document.createElement("td");
		newCol2.innerHTML = "<input type='text' name='Name"+i+"'>";
		newrow.appendChild(newCol2);

		newCol3 = document.createElement("td");
		newCol3.innerHTML = "<input type='text' name='ScienceName"+i+"'>";
		newrow.appendChild(newCol3);

		newCol4 = document.createElement("td");
		newCol4.innerHTML = "<input type='text' name ='Unit"+i+"'>";
		newrow.appendChild(newCol4);

		newCol5 = document.createElement("td");
		newCol5.innerHTML = "<input type='text' name ='Origin"+i+"'>";
		newrow.appendChild(newCol5);

		newCol6 = document.createElement("td");
		newCol6.innerHTML = "<input type='text' name ='Amount"+i+"'>";
		newrow.appendChild(newCol6);

		node.appendChild(newrow);
		numExport++;
}
