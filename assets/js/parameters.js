
// open hidden layer
function validate_label(main, validate, cross)
{
		var x=document.getElementById(main).value;
		if (x==null || x=="")
  		{
  			document.getElementById(['circularG']).style.visibility = 'hidden';
  			document.getElementById(validate).style.visibility = 'hidden';
 			document.getElementById(cross).style.visibility = 'visible';
 		 }
		else
		{
			document.getElementById(['circularG']).style.visibility = 'hidden';
  			document.getElementById(validate).style.visibility = 'visible';
 			document.getElementById(cross).style.visibility = 'hidden';
		}
}

function validating_label(validate, cross)
{

  	document.getElementById(validate).style.visibility = 'hidden';
 	document.getElementById(cross).style.visibility = 'hidden';
	document.getElementById(['circularG']).style.visibility = 'visible';
}

function hide(element)
{
		document.getElementById(element).style.visibility = 'hidden';
}

function show(element)
{
		document.getElementById(element).style.visibility = 'visible';
}