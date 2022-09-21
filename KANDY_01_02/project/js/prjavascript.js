
//enable button
function enableButton()
	{
		if(document.getElementById("checkbox").checked)
		{
			document.getElementById("submitbtn").disabled=false ;
		}
		else{
			document.getElementById("submitbtn").disabled=true;
		}
	}
//Vehicle registration
function RegisterVehicle() {
	var response = confirm("Confirm your Vehicle Registartion");
	
	if (response==1)
	{
		alert("Successfully registered");
	}
	else
	{
		alert("Sorry,Registration cancelled");
	}
}

