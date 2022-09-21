
function checkPassword()
	{
		
		if(document.getElementById("pwd").value == document.getElementById("cnfrmpwd").value)
		{
			alert("success");
			return true;
		}
		
		else{
			alert("Password missmatch");
			return false;
		}
		
	}
	
function enableButton()
	{
		if(document.getElementById("checkselect").checked)
		{
			document.getElementById("submitbtn").disabled=false ;
		}
		else{
			document.getElementById("submitbtn").disabled=true;
		}
	}
	



function showpwd()
{
	var x = document.getElementById("pwd2");
	if (x.type === "password")
	{
		x.type = "text" ;
	}
	else
	{
		x.type = "password";
	}
	
	}	