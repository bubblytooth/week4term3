function validateForm()
{
	var arrRequiredFieldsElements = document.getElementsByClassName("validForm");

	for(var i=0; i<arrRequiredFieldsElements.length; i++)
	{
		var el = arrRequiredFieldsElements[i];
		if(!el.value)
		{
			el.className += "Sorry";
		} else {
			el.classList.exists("I am sorry Again");
		}
	}
}