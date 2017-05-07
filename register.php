<!DOCTYPE html>

<?php
include ('connection.php');
session_start();
?>

<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Student Registration</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<meta content="" name="description">
<meta content="" name="author">






<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="./register_files/css.css" rel="stylesheet" type="text/css">

<!-- <link href="jsp/west/v2/assest/css/simple-line-icons.min.css" rel="stylesheet" type="text/css"> -->

<link href="./register_files/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="./register_files/uniform.default.css" rel="stylesheet" type="text/css">
<link href="./register_files/bootstrap-switch.min.css" rel="stylesheet" type="text/css">


<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="./register_files/select2.css">
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="./register_files/components.css" id="style_components" rel="stylesheet" type="text/css"> 
<link href="./register_files/plugins.css" rel="stylesheet" type="text/css">
<link href="./register_files/layout.css" rel="stylesheet" type="text/css">
<link id="style_color" href="./register_files/grey.css" rel="stylesheet" type="text/css">

<script src="./register_files/addressDetails.js.download" type="text/javascript"></script>


<style type="text/css">
div.loader {
   width: 60px;
   height: 60px;
   position: absolute;
   left: 50%;
   top: 50%;
   margin-top: -30px;
   margin-left: -30px;
   display: none;
}
</style>
<link href="./register_files/jquery-ui.css" rel="stylesheet" type="text/css">

 <script type="text/javascript" src="./register_files/jquery.min.js.download"></script>
 <script src="./register_files/jquery-ui.min.js.download"></script>
<script src="./register_files/nameonly.js.download"></script>

<link href="./register_files/site-99cdcafd.css" rel="stylesheet" type="text/css">    
<!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css"> -->

  <script>
  $(function() {
	/*   $('#date_of_birth').datepicker({
		  changeMonth: true, changeYear: true
	  }); */
 
/* 	  $('#date_of_birth').datepicker({changeMonth: true, changeYear: true, yearRange: '1970:2000',format: "yyyy-mm-dd"});
 */	 // $('.ui-datepicker-current-day').removeClass('ui-datepicker-current-day');
 
 //$('#date_of_birth').datepicker({changeMonth: true,changeYear: true, yearRange : '1965:2000', dateFormat: 'yy-mm-dd',minDate: new Date(1965, 1, 1), maxDate: new Date(1999, 12, 31)});
	
  });
  </script>
<!-- END THEME STYLES -->

	  <script type="text/javascript">
	  function validateForm() {   
		 
		   
		   
		     
		  
		    var x = document.forms["form"]["intermediate_marks"].value;
		    var gru = document.forms["form"]["graduation"].value;
	 	    document.getElementById("msgForWEST").innerHTML=""; 
	 	    if(x==null || x==""){
		    if(!(gru=="Polytechnic" || gru=="ITI")){      
		    	
		    	document.getElementById("msgForWEST").innerHTML="This field is required";
		    	return false;   
		    }else{
	return true;   
	}
		}}
	  
	  function datePickerValidation(){
		  
	  }
	  
	  function datePicker(){
		  var days=document.getElementById("days").value;
		  var months=document.getElementById("months").value;
		  var years=document.getElementById("years").value;
		     
		  document.getElementById("date_of_birth").value=years+"-"+months+"-"+days;
	  }  
	  
</script>

  <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function() {
          
for (i = 2008; i > 1948; i--)
{
	if(i == 2008){  
		 $('#years').append($('<option />').val("").html("YYYY"));
	}else{
		 $('#years').append($('<option />').val(i).html(i));	
	}
   
}
    
for (i = 0; i < 13; i++)
{
	if(i==0){
		$('#months').append($('<option />').val("").html("MM"));
	}else{
		if(i < 10){
			i="0"+i;
		}     
		$('#months').append($('<option />').val(i).html(i));	
	}
    
} 
 updateNumberOfDays(); 
    
    $('#years, #months').change(function(){
    
        updateNumberOfDays(); 
    
    });

});

function updateNumberOfDays(){
$('#days').html('');
month=$('#months').val();
year=$('#years').val();
days=daysInMonth(month, year);
    
    for(i=0; i < days+1 ; i++){
    	if(i==0){  
    		$('#days').append($('<option />').val("").html("DD"));
    	}else{
    		if(i < 10){
    			i="0"+i;
    		} 
    		$('#days').append($('<option />').val(i).html(i));
    	}
            
        }

}

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}
});//]]>  

</script> 	 

<style type="text/css">
.page-header{ 
border-bottom: 0px !important;
}
A{ 
text-decoration: none !important; 
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->  
 
	  
<body style=background:url("./register_files/bg1.jpg")>
  
 
 
 

	  <div class="index home">  
      <div class="wrap">   
	        <div id="header">  
	       <header class="header scroll scrolled">   
          <div class="header--container"> 
            <div class="header--left"> 
            
              
              <a class="header--brand" style="margin-left: 10px;"></a>
              
            </div>        
           <nav class="header--auth-nav">    
              <div class="header--auth-nav---unauth" id="header--nav---unauth"> 
                
                
                  <a id="" class="header--sign-in-btn header--auth-nav--item btn btn---text btn---white btn---s" data-toggle="modal" href="./login2.php" style="margin-right: 20px;">  LOG IN  </a>
                
                  <a id="" class="header--sign-in-btn header--auth-nav--item btn btn---text btn---white btn---s" href="" style="margin-right: 10px;"></a>      
              </div>                                      
            </nav>  
          </div> 
        </div> 
      </header>  
	  </div></div></div>
	   
	   
<div class="clearfix">
</div>     
<div class="page-header page-container-bg-solid page-sidebar-closed-hide-logo ">
	<!-- BEGIN CONTAINER -->  
	<div class="container" style=background-image: url("./register_files/bg1.png;height: 720px;padding: 0%;width: 100%")>
	<div class="page-container" style="margin-bottom: 0 !important">       
		    
		<!-- BEGIN CONTENT --> 
		<div class="page-content-wrapper" style="margin-bottom: 0">
			<div class="page-content" style="min-height:10px">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				 
								<!-- BEGIN PAGE CONTENT--> 
				<div class="row" style="margin-top: 0px;">
					<div class="col-md-12">  
						<div class="portlet box light blue" id="form_wizard_1" style="margin-bottom: 0;">
							<div class="portlet-title">
								<div class="caption">
									<i></i> Registration Form - <span class="step-title">
									Step 1 of 3 </span>
								</div>
							<!-- 	<div class="tools hidden-xs">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div> -->
							</div>
							<div class="portlet-body form">
								<form name="submit_form" action="./storing.php" method="POST" class="form-horizontal" id="submit_form" target="_self" novalidate="novalidate">
									<div class="form-wizard">
										<div class="form-body">
											<ul class="nav nav-pills nav-justified steps">
												<li class="active">
													<a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
													<span class="number"><strong>
													1 </strong></span>
													<span class="desc">
													<i class="fa fa-check"></i> <strong>Login Details</strong> </span>
													</a>
												</li>
												<li>
													<a href="#tab2" data-toggle="tab" class="step">
													<span class="number"><strong>
													2 </strong></span>
													<span class="desc">
													<i class="fa fa-check"></i> <strong>Profile Details</strong> </span>
													</a>
												</li>
												<li>
													<a href="#tab3" data-toggle="tab" class="step active">
													<span class="number"><strong>
													3 </strong></span>
													<span class="desc">
													<i class="fa fa-check"></i><strong> Education Details </strong></span>
													</a>
												</li>
												</ul>
											<div id="bar" class="progress progress-striped" role="progressbar">
												<div class="progress-bar progress-bar-success" style="width: 25%;">
												</div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													Please input all the required fields.
												</div>
												<div class="alert alert-success display-none">
													<button class="close" data-dismiss="alert"></button>
													Your form validation is successful!
												</div>
												<div class="tab-pane active" id="tab1">
													<h3 class="block"> Login Details</h3>
													<div class="form-group ">
														<label class="control-label col-md-4">Email Address<span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="temp_login_id" id="temp_login_id" placeholder="Provide your Email ID" onchange="return checkEmail();" oncopy="return false;" onpaste="return false;" required="">
															<!-- <span class="help-block">
															Provide your Email ID </span> -->
															<span style="display: none; color:red;" id="already">Sorry! This Email Id already exist.</span>
															<span style="display: none; color:red;" id="validemail">Please enter valid email address.</span>
														</div>
														<font color="red"><div id="checkmail"></div></font>
													</div>
													<div class="form-group">
														<label class="control-label col-md-4">Confirm Email Address<span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="text" class="form-control" name="login_id" placeholder="Confirm your Email ID" id="login_id" oncopy="return false;" onpaste="return false;" required="">
															<!-- <span class="help-block">
															Confirm your Email ID </span> -->   
														
														</div>
														
													</div>
											  <!-- Password and conform password  -->
    												 
													<div class="form-group">
													<label class="control-label col-md-4">Password<span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="password" class="form-control" name="tempPassword" id="tempPassword" placeholder="Provide your Password" oncopy="return false;" onpaste="return false;" required="">
													    </div>
														<font color="red"><div id="checkmail"></div></font>
													</div>
													<div class="form-group">
														<label class="control-label col-md-4">Confirm Password<span class="required">
														* </span>
														</label>
														<div class="col-md-4">
															<input type="password" class="form-control" name="password" id="password" placeholder="Confirm your Password" oncopy="return false;" onpaste="return false;" required="">
														</div>
													</div>
													
													
													
													<div class="row">
													<div align="center">
														
														<div id="loader" style="display: none"><img src="./register_files/loading.gif"></div>
   														</div></div>
													
												   <label style="color: red; margin-left: 10%;"></label>
													
												
													
												</div>
								
												<div class="tab-pane" id="tab2">
														<h3 class="block"> Profile Details</h3>
														<div class="row">
														<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">First Name <span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<input type="text" class="form-control" name="first_name" id="first_name" placeholder="Provide your First Name" value="" required="">
															<!-- <span class="help-block">
															Provide your First Name </span> -->
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Middle Name <span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Provide your Middle Name" value="" required="">
														
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Last Name <span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Provide your Last Name" value="" required="">
														<!-- 	<span class="help-block">
															Provide your Last Name </span> -->
														</div>
													</div>
														<div class="form-group">
														<label class="control-label col-md-3">Gender <span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															 <select name="sex" id="sex" class="form-control" onchange="allLetter(this.id)" required="">
															 <option value="">Select Gender</option>
															 <option value="male">Male</option>
															 <option value="female">Female</option>
   															 </select>
   															<!--  <span class="help-block">
															Provide your Gender </span> -->
														</div>
															<div id="form_gender_error">
															</div>
														</div>
																	
													<div class="form-group">
														<label class="control-label col-md-3">DOB <span class="required">
														* </span>
														</label> 
														<div class="col-md-9">
															 <input type="hidden" name="date_of_birth" id="date_of_birth">  
														<!-- 	 <input type="hidden" id="years" name="years">       --> 
														<table>
														<tbody><tr> 
														<td> <select id="years" name="years" onchange="datePicker()" style="width: 100px; padding:10px 18px 10px;" required=""><option value="">YYYY</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option></select></td>
														<td><select id="months" name="months" onchange="datePicker()" style="width: 100px; padding:10px 18px 10px;" required=""><option value="">MM</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></td>
														<td><select id="days" name="days" onchange="datePicker()" style="width: 100px; padding:10px 18px 10px;" required=""><option value="">DD</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></td>
														</tr>
														</tbody></table>
														
															      
															 
															 <span id="dobmsg" style="color: red"></span>       
															<!-- <span class="help-block">
															Provide your Date of Birth </span> -->      
														</div>
													</div>
													
													
															 
													
													<div class="form-group">
														<label class="control-label col-md-3">Mobile No <span class="required">
														* </span>
														</label>
													
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="Provide your Contact No" name="contact_no" id="contact_no" value="" required="">
														<!-- 	<span class="help-block">
															Provide your Contact No </span> -->
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label col-md-3">Address Line 1<span class="required">
														* </span>
														</label>
													
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="Provide your Street Address" name="line1" id="line1" value="" required="">
														</div>
													</div>
																								 
													</div>
													<div class="col-md-5">
													
													<div class="form-group">
														<label class="control-label col-md-3">Address Line 2</label>
													
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="Optional" name="line2" id="line2" value=" ">
														</div>
													</div>
															   
													 
														<div class="form-group">
														<label class="control-label col-md-3">Country<span class="required">
														* </span></label>
														<div class="col-md-9">
														 <select name="country" id="country" onchange="" class="form-control" required="">
														   
														  <option value="">Select Country</option>
														 	
						                               	 <option value="India" selected="selected">India </option>
						                               		   
						                               		  </select>
														<!--   <span class="help-block">
															Provide your Country </span> -->
														  </div>
														  </div>
													
													<div id="addressMain">	
													
								
													<div class="form-group">
												
												    
													
												    
														<label class="control-label col-md-3">State<span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<select name="state" id="state" onchange="" class="form-control" required="">
						   										  <option value="">Select State</option>
						   										
						                   		                       		   <option value="Andaman Nicobar">Andaman Nicobar</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Andhra Pradesh">Andhra Pradesh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Assam">Assam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Bihar">Bihar</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Chandigarh">Chandigarh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Chhattisgarh">Chhattisgarh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Daman and Diu">Daman and Diu</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Delhi">Delhi</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Goa">Goa</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Gujarat">Gujarat</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Haryana">Haryana</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Himachal Pradesh">Himachal Pradesh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Jammu and Kashmir">Jammu and Kashmir</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Jharkhand">Jharkhand</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Karnataka">Karnataka</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kerala">Kerala</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Lakshdweep">Lakshdweep</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Madhya Pradesh">Madhya Pradesh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Maharashtra">Maharashtra</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Manipur">Manipur</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Meghalaya">Meghalaya</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Mizoram">Mizoram</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Nagaland">Nagaland</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Orissa">Orissa</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Pondicherry">Pondicherry</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Punjab">Punjab</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Rajasthan">Rajasthan</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Sikkim">Sikkim</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Tamil Nadu">Tamil Nadu</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Telangana">Telangana</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Tripura">Tripura</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Uttar Pradesh">Uttar Pradesh</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Uttarakhand">Uttarakhand</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="West Bengal">West Bengal</option>
						                   		                       		     
						                               		   	    </select>
															<!-- <span class="help-block">
															Provide your State </span> -->
														</div>
														</div>
														
													<div class="form-group">
													<label class="control-label col-md-3">District<span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<select name="district" id="district" onchange="" class="form-control" required="">
																 <option value="">Select District</option>
																  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kollam">Kollam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Alappuzha">Alappuzha</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Pathanamthitta">Pathanamthitta</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kottayam">Kottayam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Idukki">Idukki</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Ernakulam">Ernakulam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Thrissur">Thrissur</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Palakkad">Palakkad</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Malappuram">Malappuram</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kozhikode">Kozhikode</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Wayanad">Wayanad</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kannur">Kannur</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kasaragod">Kasaragod</option>
						                   		                       		    
															</select>
															<!-- <span class="help-block">
															Provide your District </span> -->
														</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City<span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<select name="city" id="city" onchange="getPostoffice()" class="form-control" required="">
															<option value="">Select City</option>
															<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kollam">Kollam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Alappuzha">Alappuzha</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Pathanamthitta">Pathanamthitta</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kottayam">Kottayam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Idukki">Idukki</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Ernakulam">Ernakulam</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Thrissur">Thrissur</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Palakkad">Palakkad</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Malappuram">Malappuram</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kozhikode">Kozhikode</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Wayanad">Wayanad</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kannur">Kannur</option>
						                   		                       		     
						                               		   	
						                   		                       		   <option value="Kasaragod">Kasaragod</option>
						                   		                       		     
															</select> 
															<!-- <span class="help-block">
															Provide your City. </span> -->
														</div>
														
													
													
													
													
													
													</div>
													
														
													<div class="form-group">
														<label class="control-label col-md-3">Post Office <span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<input name="postoffice" id="postoffice" onchange="" class="form-control" required="">
															</input> 
															<!-- <span class="help-block">
															Provide your Post Office </span> -->
														</div>
														
														
													
														
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">PIN Code<span class="required">
														* </span>
														</label>
														<div class="col-md-9">
															<input name="pincode" id="pincode" onchange="" class="form-control" required="">
															</input> 
															<!-- <span class="help-block">
															Provide your Post Office </span> -->
														</div>
														
														
													
														
													</div>
													</div>
														</div>
											
  												<div class="row">
													<div align="center">
														
														<div id="loader" style="display: none"><img src="./register_files/loading.gif"></div>
   														</div></div>
														
												
													   <label style="color: red; margin-left: 10%;"></label>
											</div>
									</div>
													
						<div class="tab-pane" id="tab3">
												<h3 class="block"> Education Details</h3>
												
												   
													<div class="row">
													<div class="col-md-8">
														<div class="form-group">
														<label class="control-label col-md-4">Registration ID <span class="required">*
															</span>
															</label>
															<div class="col-md-8">
													
													<input type="text" class="form-control" placeholder="Provide your Registration ID" name="rid" id="rid" value="" required="">
														</input>													
															</div>
															</div>
													<div class="form-group">
														<label class="control-label col-md-4">Stream<span class="required">
															* </span>
															</label>
															<div class="col-md-8">
													
													<select type="text" class="form-control" placeholder="Provide your Branch" name="stream" id="stream" value="" required="">
															<option value="">Select Branch</option>
															<option value="Civil Engineering">Civil Engineering</option>
															<option value="Computer Science and Engineering">Computer Science and Engineering</option>
															<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
															<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
															<option value="Applied Science Engineering">Applied Science Engineering</option>
														</select>													
															</div>
															</div>
															
															<div class="form-group">
														<label class="control-label col-md-4">Semester<span class="required">
															* </span>
															</label>
															<div class="col-md-3">
													
													<select type="text" class="form-control" placeholder="Provide your Sem" name="sem" id="sem" value="" required="">
															<option value="">Select Sem</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
														</select>													
															</div>
															</div>
														
													
														</div>
														</div>
														</div>
												<div class="col-md-6">  <!-- city& college div -->
												
													<div class="form-group" style="display: none" id="otherC">
														
													</div>
												</div>
												
													 </div> <!--college end  -->
													 <div id="collegeOther" style="display: none;">
													 	<div class="col-md-6">
													<div class="form-group">
														
													</div>
											
													 </div>
													 <div class="col-md-6">
													 <div class="form-group">
													  </div>
													
													 </div>
													 	<div class="col-md-6">
													<div class="form-group">
													</div>
													
													</div>
												</div></div>
										
											<div class="row">
													<div align="center">
														
														<div id="loader" style="display: none"><img src="./register_files/loading.gif"></div>
   														</div></div>
												
													   <label style="color: red; margin-left: 10%;"></label>
													
			
													</div>
								
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-4 col-md-8">  <!-- button position -->

												<a href="javascript:;" class="btn default button-previous disabled" style="height: 43px; padding: 11px; border-color: transparent; display: none;">
													<i class="m-icon-swapleft m-icon-white"></i> Previous Step </a>
													<a href="javascript:;" class="btn blue button-next" style="height:43px; padding:11px;">
													Continue <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<a href="javascript: submitform()" method="POST" class="btn green button-submit" style="height: 43px; padding: 11px; display: none;">
											Submit <i class="m-icon-swapright m-icon-white"></i>
													</a>
													   </div>
													   
													</div>
												</div>
   <input type="hidden" name="test_location_sequence" id="test_location_sequence" value="">
   <input type="hidden" name="compCode" id="compCode" value="0021000">
   <input type="hidden" name="code" id="code" value="0021000">
   <input type="hidden" name="locationType" id="locationType" value="custom_made">
   <input type="hidden" name="error" id="error" value="null">
      
    <input type="hidden" name="source_of_reg" id="source_of_reg" value="9999">
     
								</form>
								<script>
								        function submitform(){
											document.submit_form.action="./storing.php";
											document.submit_form.submit();
											}
								</script>
							</div> 
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->

	</div>
	</div>

	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
 
	
	<!-- END FOOTER -->
</div>
      
<div class="index home"> 
      <div class="wrap">     
         <div id="footer"> 	             
          <div align="center" style="font-size: 11px;padding: 20px;"><i>Ratrace © 2017. All Rights Reserved. All logos are property of HERJS.</i>
          </div>           
          </div>
 </div></div>
  
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="jsp/west/v2/assest/js/respond.min.js"></script>
<script src="jsp/west/v2/assest/js/excanvas.min.js"></script> 
<![endif]-->

<script src="./register_files/jquery.min.js.download" type="text/javascript"></script>

<script src="./register_files/jquery-migrate.min.js.download" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="./register_files/jquery-ui.min.js.download" type="text/javascript"></script>
<script src="./register_files/bootstrap.min.js.download" type="text/javascript"></script>
<!-- <script src="jsp/west/v2/assest/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script> -->

<!-- <script src="jsp/west/v2/assest/js/jquery.blockui.min.js" type="text/javascript"></script> -->
<script src="./register_files/jquery.cokie.min.js.download" type="text/javascript"></script>
<script src="./register_files/jquery.uniform.min.js.download" type="text/javascript"></script>
<script src="./register_files/bootstrap-switch.min.js.download" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="./register_files/jquery.validate.min.js.download"></script>
<script type="text/javascript" src="./register_files/additional-methods.min.js.download"></script>
<script type="text/javascript" src="./register_files/jquery.bootstrap.wizard.min.js.download"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="./register_files/select2.min.js.download"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="./register_files/metronic.js.download" type="text/javascript"></script>
<script src="./register_files/layout.js.download" type="text/javascript"></script>
<script src="./register_files/demo.js.download" type="text/javascript"></script>
  <script src="./register_files/form-wizard.js.download"></script> 

   
<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
function updateSNDTCollegeName(){
	var collegeCity=document.getElementById('collegeCity').value;
	//alert(collegeCity);
	 
	if(collegeCity=="Mumbai"){
		
		 try{ 
			 var temp="SNDT Juhu,SNDT Churchgate";
			 var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeName");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select","");
				for(var i=0;i<data.length;i++)
					{	
					select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
					var regular    =    /--/g;      
			        if(regular.test(select.options[i].text)){
			        	select.options[i].disabled=true;  
			        }
						                                           
					}
		 }catch (e) {
			// TODO: handle exception
		}
		
	}else if(collegeCity=="Pune"){
		      
		 try{
			 var temp="SNDT Pune";
			 var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeName");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select","");
				for(var i=0;i<data.length;i++)
					{	
					select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
					var regular    =    /--/g;      
			        if(regular.test(select.options[i].text)){
			        	select.options[i].disabled=true;  
			        }
						                                           
					}
		 }catch (e) {
			// TODO: handle exception
		}
		
	}else{
		 try{
			 var temp="SNDT Juhu,SNDT Churchgate,SNDT Pune";
			 var data = temp.split(",");//alert(data);   
				var select = document.getElementById("collegeName");
				select.options.length = 0;
				select.options[select.options.length]= new Option("Select","");
				for(var i=0;i<data.length;i++)
					{	
					select.options[select.options.length]= new Option(data[i].replace(/^\s+|\s+$/g,""),data[i].replace(/^\s+|\s+$/g,""));
					var regular    =    /--/g;      
			        if(regular.test(select.options[i].text)){
			        	select.options[i].disabled=true;  
			        }
						                                           
					}
		 }catch (e) {
			// TODO: handle exception
		}
	}
}
  

function validateCode(){
	//alert("hiii");
	var numexp = /^[0-9]+$/;
	if(document.getElementById('collegeNameOther').value.match(numexp)){
		document.getElementById("alphanum").style.display='block';
		document.getElementById("collegeNameOther").value="";
		
		
		var resp;
	resp= false;
	}else{
//	alert("Entry must be a number");
		document.getElementById("alphanum").style.display='none';
	elem.focus();
	resp= true;
	}   
	//alert("resp---"+resp);
	return resp;
 }
function checkEmail() {


    var loginId = $("#temp_login_id").val();
   //  alert("loginId----"+loginId);
    document.getElementById("checkmail").innerHTML = "";
	 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		 if(pattern.test(loginId))
				 {
try{
    var code= $("#compCode").val();
   // alert(loginId);
    $.ajax({
        type: "POST",
        url: "checkLoginId.obj",
        data: "loginId=" + loginId+"&code="+code,
        success: function(response) {
		//alert(response);
if(response=="true"){
	//alert("hii");
	var ht="<span style='color: green'>Verified &#10004;</span>";   
	 document.getElementById("checkmail").innerHTML = ht;
	 document.getElementById("already").style.display="none";
}
else{
	//alert("LOGIN ID Already Exist");
	document.getElementById("temp_login_id").value="";
	 document.getElementById("checkmail").innerHTML = "";
	   var msg1="Sorry! This email id is already registered with us.";
	  document.getElementById("login_id").value="";
	  document.getElementById("checkmail").innerHTML = msg1;
	  document.getElementById("already").style.display="none";
}
	return response;
	
        }
    });

}catch(e){
	alert(e);
}
		 }
			 /* else
				 {
				 var ht="<span style='red: green'>Invalid Email ID</span>";   
				 document.getElementById("checkmail").innerHTML = ht;
                             	 return false;
				 } */
	
}			

</script>
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
  /*  var error=document.getElementById("error").value;
   alert("error"+error); */
  
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormWizard.init(); 
 

  
  
});
</script>
 <script type="text/javascript">
 $(document).ready(function() {
           
            
            $('#certification').change(function(){
//             	alert();
        		var a=document.getElementById("certification").value;
//         		 alert(a);
        		if(a == "Other"){	
        			document.getElementById("certificationOther").style.display="block";
//         			document.getElementById("certification").value=document.getElementById("Othercertification").value;
        		}else{  
        		document.getElementById("Othercertification").value="";    	 
        		document.getElementById("certificationOther").style.display="none"; 
            }
        		
            });
            
 
            
        });
 </script>
<script type="text/javascript">
function getGetstream(id)
{
	
	var g_course=document.getElementById(id).value;
 	//alert(g_course);
 	//var select = document.getElementById("g_stream");
  //  select.options.length = 0;
	if(g_course=="Select" || g_course=="")
	  {
	//	alert("here");
		//select.options[select.options.length]= new Option(strar[i].replace(/^\s+|\s+$/g,""),strar[i].replace(/^\s+|\s+$/g,""));
		if(id=='graduation')
      		 document.getElementById("g_stream").selectedIndex = "0";
      		else if(id=='post_graduation')
      			 document.getElementById("post_stream").selectedIndex = "0";
	  }
	else
	  {
		//alert("here1");
	      xmlHttp=GetXmlHttpObject()
	      if (xmlHttp==null)
	      {
	          alert ("Browser does not support HTTP Request")
	         return
	      }
	      var url="getG_stream.obj"
	      url=url+"?g_course="+g_course+"&id="+id+"&w=0&"+Math.random();
	  // alert("url--"+url);
	   if(id=='graduation')
	      xmlHttp.onreadystatechange=getDataBachelor
	      
	      else if(id=='post_graduation')
	    	  xmlHttp.onreadystatechange=getDataMaster
	    	  
	      xmlHttp.open("GET",url,true)
	      xmlHttp.send(null)
	  }
	            
}

function getDataBachelor(){
    //
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        var data = xmlHttp.responseText;
      
//         var strar = data.split(":");
        data = data.replace("[","").replace("]","");
		var strar = data.split(",");
//			  alert(strar);
        var select = document.getElementById("g_stream");
        select.options.length = 0;
        select.options[select.options.length]= new Option("Select","");
        for(var i=0;i<strar.length;i++)
        {
      	 
        	
      	 
      	
      		  select.options[select.options.length]= new Option(strar[i].replace(/^\s+|\s+$/g,""),strar[i].replace(/^\s+|\s+$/g,""));
        }
  
    }

}

function getDataMaster(){
    //
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        var data = xmlHttp.responseText;
        data = data.replace("[","").replace("]","");
		var strar = data.split(",");
//			  alert(strar);
      
        var select = document.getElementById("post_stream");
        select.options.length = 0;
        select.options[select.options.length]= new Option("Select",""); 
        for(var i=0;i<strar.length;i++)
        {             	 
      		                	 
      		  select.options[select.options.length]= new Option(strar[i].replace(/^\s+|\s+$/g,""),strar[i].replace(/^\s+|\s+$/g,""));
        }
  
    }

} 


</script>

<!-- <script>
$(document).ready(function() {
	//alert("m HERE");
$("#countries").msDropdown();
});
</script> -->

<script type="text/javascript">
function splitDob(){
var dob=document.getElementById("date_of_birth").value;
//alert(dob);
var years=document.getElementById("years");
years=dob.split("/");

document.getElementById("years").value=years;

//alert("dob----"+dob);
//alert("years=="+years);
//alert(years.slice(2,5));
document.getElementById("years").value=years.slice(2,5);


//alert("years other=="+document.getElementById("years").value);

}
</script>
 <script type="text/javascript">
 $(function() {
	   $('#submit_form').submit(function() {
	      $(this).find('.loader').show();
	   });
	});
$(function()
		{
			// Validation		
			$("#submit_form1").validate(
			{
				rules:
				{ 
					login_id:
					{
						required: true,
						email: true,
						equalTo: '#temp_login_id'
					}
					
				,
				temp_login_id:
				{
					/* required: true,
					email: true, */
				},
				},
				// Messages for form validation
				messages:
				{
					temp_login_id:
					{
						required: 'Please enter your login'
					},login_id:
					{
						required: 'Please re enter your login id'
					},	contact_no:
					{
                		required: 'Please enter 10 digit mobile number',		
    					digits:'Only numbers are allowed.',
    					maxlength: jQuery.validator.format("Please don't enter more than 10 numbers."),
    				    minlength: jQuery.validator.format("Please enter 10 digit mobile number.")
					},
					first_name:
					{
						characterOnly:jQuery.validator.format("Please enter characters only.")
					},
                
					last_name:
						{
						characterOnly:jQuery.validator.format("Please enter characters only.")
						}
                
					
				},					
				
				// Do not change code below
				errorPlacement: function(error, element)
				{
					error.insertAfter(element.parent());
				}
			});
		});			
</script> 
<!-- END JAVASCRIPTS -->
 


<!-- END BODY -->
<span role="status" aria-live="polite" class="select2-hidden-accessible"></span></body></html>