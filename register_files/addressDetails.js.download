/**
 * 
 */
function getjobRole()
{ //alert("new state");
	var industry=document.getElementById("industry").value;
		if(country=='select'||country==''){
		}else{
		try
		{
			$("#jobRole option:selected").removeAttr("selected");
			 $("#jobRole").select2('val', '');
                        
			 
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getjobRole.obj?industry="+industry+"&"+Math.random();
		      xmlHttp.onreadystatechange=Changedjobrole;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}	
}

function Changedjobrole(){
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
			 // 	alert("temp"+temp);
				temp = temp.replace("[","").replace("]","");
				console.log(temp); 
				var data = temp.split(",");//alert(data);   
				var select = document.getElementById("jobRole");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select Job Role","");
				for(var i=0;i<data.length;i++)
					{	
					select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
					var regular    =    /--/g;      
			        if(regular.test(select.options[i].text)){
			        	select.options[i].disabled=true;  
			        }
						                                           
					}
				
		  	}
		  catch(e)
		  	{
			     alert(e);
		  	}
	   }
}
 
function getStates()
{
	var country=document.getElementById("country").value;
	if(country=='India')
		{
			document.getElementById("addressOther").style.display="none";
			document.getElementById("addressMain").style.display="block";
			document.getElementById("OtherState").value="";
			document.getElementById("OtherDistrict").value="";
			document.getElementById("OtherCity").value="";
			document.getElementById("OtherPincode").value="";
//			getStateList(country);
		}
	else
		{ 
			document.getElementById("addressOther").style.display="block";
			document.getElementById("addressMain").style.display="none";
			document.getElementById("state").value="";
			document.getElementById("district").value="";
			document.getElementById("city").value=""; 
			document.getElementById("pincode").value="";
			  
		}
		
}
function getcollegeStates()
{  // alert("here");
var country1=document.getElementById("collegeCountry").value;
//alert("91"+"country1"+country1);
	//var country = document.form.collegeCountry.options[document.form.collegeCountry.selectedIndex].text ;
	//alert("91"+country);
	if(country1=='India')
		{ 
		
			document.getElementById("collegeOther").style.display="none";
			document.getElementById("collegeMain").style.display="block";
			document.getElementById("OthercollegeState").value="";
			document.getElementById("OthercollegeCity").value="";
			document.getElementById("OthercollegeName").value="";
//			getStateList(country);
		}
	else
		{   
			document.getElementById("collegeOther").style.display="block";
			document.getElementById("collegeMain").style.display="none";
			document.getElementById("collegeState").value="";
			document.getElementById("collegeCity").value="";
			document.getElementById("collegeName").value="";
			   
		}
}

function getcollegeStates1()
{ //alert("new state");
	var country = document.getElementById("collegeCountry").value;
	
	alert("new country"+country);
		if(country=='select'||country==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      
		      var url="getCollegeState.obj?country="+country+"&"+Math.random();
		      //alert("hello"+url);
		      xmlHttp.onreadystatechange=countryChangedCollegeState;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
		
	
	
	
}


function countryChangedCollegeState(){
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  
			  	var temp =  xmlHttp.responseText;
			 // 	alert("temp"+temp);
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeState");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select State","");
				for(var i=0;i<data.length;i++)
					{						
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
					}
	     
		  	}
		  catch(e)
		  	{
			 // alert(e);
		  	}
	   }
}


function getcollegeOther()
{      
var collegeName=document.getElementById("collegeName").value;
	
	if(collegeName=='Other') 
	{         
		document.getElementById("otherC").style.display="block";
	}else{   
		document.getElementById("otherC").style.display="none";
   	}
}  
	function getDistrict(){
		
		var country = document.getElementById("country").value;
		var state = document.getElementById("state").value;
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getAddressDistrict.obj?country="+country+"&state="+state+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=stateChangedDistrict;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
		
	    }

	function stateChangedDistrict()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");
				var select = document.getElementById("district");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select District","");
				for(var i=0;i<data.length;i++)
					{
					
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
							
					}
	     
		  	}
		  catch(e)
		  	{
			 // alert(e);
		  	}
	   }
	}
	
function getCity()
	{
	var country = document.getElementById("country").value;
	var state = document.getElementById("state").value;
	var district = document.getElementById("district").value; 
		if(state=='select'||state==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getAddressCity.obj?country="+country+"&state="+state+"&district="+district+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=stateChangedCity;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
		
	}

function stateChangedCity()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");
				var select = document.getElementById("city");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select City","");
				for(var i=0;i<data.length;i++)
					{						
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
					}
//				select.options[select.options.length]= new Option("Other","Other");
		  	}
		  catch(e)
		  	{
			  //alert(e);
		  	}
	   }
	}

	function getPostoffice()
	{
		
		var country = document.getElementById("country").value;
		var state = document.getElementById("state").value;
		var district = document.getElementById("district").value; 
		var city=document.getElementById("city").value;
		
			if(city==''||city=='select'){
				
			}
			else	{
			try
			{
			      xmlHttp=GetXmlHttpObject()
			      if (xmlHttp==null)
			      {
			          alert ("Browser does not support HTTP Request")
			         return
			      }
			      var url="getAddressPostOffice.obj?country="+country+"&state="+state+"&district="+district+"&city="+city+"&"+Math.random();
//			      alert(url);
			      xmlHttp.onreadystatechange=citychangePostoffice;
			      xmlHttp.open("GET",url,true);
			      xmlHttp.send(null);
			  }
			catch(e){
				//alert(e);
			}
				}
				}
	
	function citychangePostoffice()
	{

		  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
		   {
			  try{
				  	var temp =  xmlHttp.responseText;
					temp = temp.replace("[","").replace("]","");
					var data = temp.split(",");
					var select = document.getElementById("postoffice");
					select.options.length = 0;
					select.options[select.options.length]= new Option("Select Postoffice","");
					for(var i=0;i<data.length;i++)
						{

									select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
								
						}
		     
			  	}catch(e){
		   // alert(e);
		   }
		   }
		
	}
	
	
function getPincode()
	{
	
	var country = document.getElementById("country").value;
	var state = document.getElementById("state").value;
	var district = document.getElementById("district").value; 
	var city=document.getElementById("city").value;
	var postoffice=document.getElementById("postoffice").value;
		if(postoffice==''||postoffice=='select'){
			
		}
		else	{
		try
		{
		      xmlHttp=GetXmlHttpObject()
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request")
		         return
		      }
		      var url="getAddressPincode.obj?country="+country+"&state="+state+"&district="+district+"&city="+city+"&postoffice="+postoffice+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=postofficeChangedPincode;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
			}

	function postofficeChangedPincode()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");
				var select = document.getElementById("pincode");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select Pincode","");
				for(var i=0;i<data.length;i++)
					{

								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
							
					}
	     
		  	}catch(e){
	   // alert(e);
	   }
	   }
	}
				
	function getCollegeCity()
	{
	var country = document.getElementById("collegeCountry").value;
	var state = document.getElementById("collegeState").value;
	
		if(state=='select'||state==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getCollegeCity.obj?country="+country+"&state="+state+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=stateChangedCollegeCity;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
		
	}

	function stateChangedCollegeCity()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeCity");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select City","");
				for(var i=0;i<data.length;i++)
					{						
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
					}
	     
		  	}
		  catch(e)
		  	{
			 // alert(e);
		  	}
	   }
	}
	
	
	function getCollegeCity1()
	{
	var country = document.getElementById("collegeCountry").value;
	var state = document.getElementById("collegeState").value;
	
		if(state=='select'||state==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getCollegeCity1.obj?country="+country+"&state="+state+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=stateChangedCollegeCity1;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
		
	}

	function stateChangedCollegeCity1()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeCity");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select City","");
				for(var i=0;i<data.length;i++)
					{						
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
					}
	     
		  	}
		  catch(e)
		  	{
			 // alert(e);
		  	}
	   }
	}
	function getCollegeName()
	{
	var country = document.getElementById("collegeCountry").value;
	var state = document.getElementById("collegeState").value;
	var city = document.getElementById("collegeCity").value;
	
		if(state=='select'||state==''||city=='select'||city==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getCollegeName.obj?country="+country+"&state="+state+"&city="+city+"&"+Math.random();
//		      alert(url);
		      xmlHttp.onreadystatechange=stateChangedCollegeName;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
		//	alert(e);
		}
			}
		
	}
	function getCollegeName1()
	{
		var select = document.getElementById("collegeName");
		select.options.length = 2;
		select.options[0]= new Option("Select College Name","");
		select.options[1]= new Option("Other","Other");
	}

	function stateChangedCollegeName()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{  
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				temp=temp+",Other";
				var data = temp.split(",");
				var select = document.getElementById("collegeName");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select College Name","");
				for(var i=0;i<data.length;i++)
					{						
								select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
					}
	     
		  	}
		  catch(e)
		  	{
			//  alert(e);
		  	}
	   }
	}
	
	
	function getCode()
	{
	var country = document.getElementById("country").value;
	var state = document.getElementById("state").value;
	var district = document.getElementById("district").value; 
		if(state=='select'||state==''){
			
		}else{
		try
		{
		      xmlHttp=GetXmlHttpObject();
		      if (xmlHttp==null)
		      {
		          alert ("Browser does not support HTTP Request");
		         return
		      }
		      var url="getCode.obj?country="+country+"&state="+state+"&district="+district+"&"+Math.random();
		    //  alert(url);
		      xmlHttp.onreadystatechange=stateChangedCode;
		      xmlHttp.open("GET",url,true);
		      xmlHttp.send(null);
		  }
		catch(e){
			//alert(e);
		}
			}
		
	}

function stateChangedCode()
	{
	  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	   {
		  try{
			  	var temp =  xmlHttp.responseText;
				temp = temp.replace("[","").replace("]","");
				var data = temp.split(",");
				var select = document.getElementById("yctc_code");
				select.value=data;
				
		  	}
		  catch(e)
		  	{
			  //alert(e);
		  	}
	   }
	}



 
function getPincode_hp()
{

var country = document.getElementById("country").value;
var state = document.getElementById("state").value;
var district = document.getElementById("district").value; 
var city=document.getElementById("city").value;
/*var postoffice=document.getElementById("postoffice").value;*/

	try
	{
	      xmlHttp=GetXmlHttpObject()
	      if (xmlHttp==null)
	      {
	          alert ("Browser does not support HTTP Request")
	         return
	      }
	      var url="getAddressPincode_hp.obj?country="+country+"&state="+state+"&district="+district+"&city="+city+"&"+Math.random();
	     // alert("646=url=="+url);
	      xmlHttp.onreadystatechange=postofficeChangedPincode_hp;
	      xmlHttp.open("GET",url,true);
	      xmlHttp.send(null);
	  }
	catch(e){
		//alert(e);
	}
		
		}

function postofficeChangedPincode_hp()
{
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
	  try{
		  	var temp =  xmlHttp.responseText;
			temp = temp.replace("[","").replace("]","");
			var data = temp.split(",");
			var select = document.getElementById("pincode");
			select.options.length = 0;
			select.options[select.options.length]= new Option("Select Pincode","");
			for(var i=0;i<data.length;i++)
				{

							select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
						
				}
     
	  	}catch(e){
   // alert(e);
   }
   }
}

	
		function GetXmlHttpObject()
		{
		    req = false;
		    if(window.XMLHttpRequest && !(window.ActiveXObject)) {
		        try {
		            req = new XMLHttpRequest();
		        } catch(e) {
		            req = false;
		        }
		    } else if(window.ActiveXObject) {
		        try {
		            req = new ActiveXObject("Msxml2.XMLHTTP");
		        } catch(e) {
		            try {
		                req = new ActiveXObject("Microsoft.XMLHTTP");
		            } catch(e) {
		                req = false;
		            }
		        }
		    }
		    return req;
		}
