

function suggestEmail()
{
	var email = document.getElementById('email');
	var report = document.getElementById("report");
	var name = document.getElementById("name");
	var text = document.getElementById("message");
	var flag=0;
	var permit=0;
	var enabled=0;
	var newEnabled=0;
	
	//name = trim(name);
	//text = trim(text);
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	if(email.value.length>0)
	{
		if(!email.value.match(emailExp))
		{
			//alert("hello");
			enabled=0;
			permit=1;
		}
		else enabled=1;
	}
	if(name.value.length > 0 )
	{
		if(text.value.length > 0)
		{
			newEnabled=1;
			if(permit==0) enabled=1;
			if(email.value.length==0)
			{
				flag=1;
			}

		}
	}
	if(permit==0)
	{
		if(enabled==1 && newEnabled==1) document.getElementById("button-log").disabled=false;
		else document.getElementById("button-log").disabled="disabled";
		if(flag==1) report.innerHTML = '<span style="color:red">It is wise to enter an email !</span>';
		else if(flag==0) report.innerHTML = '&nbsp;';
	}
	else
	{
		report.innerHTML = '<span style="color:red">Your email has not the appropriate form !</span>';
		if(enabled==1 && newEnabled==1) document.getElementById("button-log").disabled=false;
		else document.getElementById("button-log").disabled="disabled";
	}
	
	
}



 
function trim(str, chars) {
	return ltrim(rtrim(str, chars), chars);
}
 
function ltrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}
 
function rtrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
