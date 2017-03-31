jQuery.fn.email = function() 
{
   return this.each(function() 
   {
	  var reg=/^([a-zA-Z0-9.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if(reg.test($(this).val()))
	  {
	  	return true;
	  }
	  else
	  {
		alert("KINDLY ENTER A VALID EMAIL ID");
	  }
   });
};
jQuery.fn.empty = function() 
{
   return this.each(function() 
   {
      if($(this).val()=='')
	  {
	  	alert("THE FIELDS ARE EMPTY");
	  }	  
   });
};
jQuery.fn.Clength = function() 
{
   return this.each(function() 
   {
      if($(this).val().length > 4 && $(this).val().length < 12)
	  {
			return true;
	  }	 
	  else
	  {
	  	alert("Should be less than 4 and more than 12 ");
	} 
   });
};

