
$(".btnedit").click( e =>{
	displayData(e);

	console.log(txtvalues);
});

// console.log(value);

function displayData(e)
{
	let id = 0;
	const td = $("#tbody tr td");
	let txtvalues = [];

	for (const value of td)
	{
		if(value.dataset.id == e.target.dataset.id)
		{
			txtvalues[id++] = value.textContent;
		}
	}

	return txtvalues;
}