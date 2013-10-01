function addRows()
{

	var num = document.getElementById('amount').value;
	
		
	for(var i=0;i<num;i++)
	{

		var numCol = new Array();
		var node = document.getElementById('table').childNodes[1];
		var newrow = document.createElement("tr");

		
		newCol1 = document.createElement("td");
		newCol1.innerHTML = i+1;
		newrow.appendChild(newCol1);
	

		

		newCol2 = document.createElement("td");
		newCol2.innerHTML = "<input type='text' name='Type'>";
		newrow.appendChild(newCol2);

		newCol3 = document.createElement("td");
		newCol3.innerHTML = "<input type='text' name='Name'>";
		newrow.appendChild(newCol3);

		newCol4 = document.createElement("td");
		newCol4.innerHTML = "<input type='text' name='ScienceName'>";
		newrow.appendChild(newCol4);

		newCol5 = document.createElement("td");
		newCol5.innerHTML = "<input type='text' name ='Unit'>";
		newrow.appendChild(newCol5);

		newCol6 = document.createElement("td");
		newCol6.innerHTML = "<input type='text' name ='Origin<'>";
		newrow.appendChild(newCol6);

		newCol7 = document.createElement("td");
		newCol7.innerHTML = "<input type='text' name ='Amount'>";
		newrow.appendChild(newCol7);

		node.appendChild(newrow);
	}
}
