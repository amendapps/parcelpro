$(document).ready(function(){
	
	
	
})



function validateQuoteBar()
{

	var error=false
	if($("select[id='QuotationCountryId']").val()=="")	
		error=true;
	else if( $("input[id=QuotationWeight]").val()=="")
	 error =true;
	else if( $("input[id=QuotationLength]").val()=="")
	  error=true;
	else if( $("input[id=QuotationHeight]").val()=="")	
		error=true;
	else if( $("input[id=QuotationWidth]").val()=="")	
		error=true;
	else if( parseInt($("input[id=QuotationWeight]").val())>30)	
	{
		alert("We only deliver upto 29.9kg. You can devide your parcel for heavier weight.");
	  return false;
	}
	
    if(error)
	 { 
	  alert("Please Fill All Fields Correctly");
	  return false;
	 }

return true;
}

function validateFrenchise()
{
	var error=false;
	
	if( $("input[id='FranchiseUsername']").val()=="" )
		error=true;
	else if( $("input[id='FranchisePassword']").val()=="" )
		error=true;
		
	if(error)
	{
	 alert("Please Fill All  Fields Correctly");
	return false;
	}
return true;
}	

function validateFrenchiseRegistration()
{
	var error=false;	
	if( $("input[id='FranchiseName']").val()=="" )
		error=true;
	else if( $("input[id='FranchiseUsername']").val()=="" )
		error=true;
	if( $("input[id='FranchisePassword']").val()=="" )
		error=true;
	else if( $("input[id='FranchiseAddress']").val()=="" )
		error=true;
		
	if(error)
	{
	 alert("Please Fill All  Fields Correctly");
	return false;
	}
return true;	
}

function validateDropOff()
{

	if( $('select[id=QuotationDestinationAddress]').val()=="" )
	 {
		 alert("Please select neares drop-off location");
		 return false;
	}
	else if( !$('input[name="data[Address][day]"]').is(':checked') )
	{
		 alert("Please select a date");
		 return false;
	}

return true;
}

function validateSenderContactDetail()
{
	var error =false;
	if( $('#AddressName').val()=="")
	  error=true;
	else if(  $('#AddressFirstAddress').val()=="" )
		error=true;
	else if(  $('#AddressFirstTown').val()=="" )  error=true;
	else if(  $('#AddressFirstCountry').val()=="" )  error=true;
	else if(  $('#AddressFirstPostcode').val()=="" ) error=true;
	else if(  $('#AddressFirstSourceCountry').val()=="" )  error=true;
	else if(  $('#AddressTelephone').val()=="" )  error=true;
	else if(  $('#AddressEmail').val()=="" ) 	error=true;
	
	if(error)
	{
		alert("Fields Can not be left blank.");
		return false;
	}
	return true;
}

function validateParcelDetail()
{
	var error=false;
	$('.parcel-details').eq(0).find('input').each(function(){
		if($(this).val()=="")
		{			
			error=true;
						console.log('---X');
			return false;
		}
		
	})
	$('.parcel-details').eq(0).find('select').each(function(){
		if($(this).val()=="")
		{
			error=true;
			console.log('---XX');
			return false;
		}
		
	})
	
	if($('#ParcelSendingReason').val()=="")
	 {   error=true;			console.log('---XXX');}
	if(!$('input[type=radio]').is(':checked'))
	{    error=true;			console.log('---XXXX');}
	if(error)
	 {			alert('Please fill all the required fields');return false;}
return true;
}


function frenchiseRegister()
{
	var error=false;
	$('input[type=text]').each(function(){
		
		if($(this).val()=="") 
		{
			error=true;
 		    return error;
		}
	})
	
	$('select').each(function(){
		if($(this).val()=="") 
		{
			error=true;
 		    return error;
		}
	})
	
/*	if( !IsEmail( $('#FranchiseUsername') ))
	{
		alert("Please Enter a valid Email Address.");
		return false;
	}*/
	if(!error && $('#FranchisePassword').val()!=$('#FranchiseConfirmPassword').val())
	 {error=true;
	   alert("Password doesn't match");
	   return false;
	 }
	
	if(error)
	{
		alert("All Fields are required.");
		return false;
	}
	return true;	  
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}