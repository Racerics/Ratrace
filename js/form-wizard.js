var FormWizard = function () {

//alert("m here");
    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='assets/images/msdropdown/icons/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            $("#country_list").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: format,
                formatSelection: format,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            var form = $('#submit_form');
           /* String errors=request.getParameter("errors");
            alert("--errors---"+errors);*/
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
            
            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                	temp_login_id:
					{
						required: true,
						email: true
					},
					login_id:
					{
						required: true,
						email: true,
						equalTo: '#temp_login_id'
					},
					tempPassword:
					{ 
						required: true,
						minlength: 3,
						maxlength: 20
					},
					password:
					{
						required: true,
						minlength: 3,
						maxlength: 20,
						equalTo: '#tempPassword'
					},
					contact_no:{required: true,
						digits: true,minlength: 10,maxlength: 10  },
					first_name:
					{
						required: true,characterOnly: true
					},
					last_name:
					{
						required: true,characterOnly: true
					},
					sex:
					{
						required: true
					},
					years:
					{
						required: true
					},
					months:
					{
						required: true
					},
					days:
					{ 
						required: true
					},
					
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                   
                 industry:{required: true}
                    ,job_role:{required: true}
                    ,working_experience:{required: true}
					
					
					
					
					,job_location:{required: true}
					,salary_range:{required: true}
				
					
					 
		 
					,collegeCountry:{required: true,characterOnly: true}
					,collegeState:{required: true,characterOnly: true}
					,collegeCity:{required: true,characterOnly: true}
					,collegeName:{required: true}
					 
					,collegeNameOther:{required: true,minlength: 3}
					,familyIncome:{required: true}
					
					,Internship:{required: true}
					,computerAvailability:{required: true}
				
					
					,country:{required: true}
					,state:{required: true,characterOnly: true}
					,district:{required: true}
					,postoffice:{required: true}
					,city:{required: true}
					,pincode:{required: true}
					
					,intermediate_marks:{   required: function(){
                        return $("#graduation option:selected").text() != "Polytechnic" && $("#graduation option:selected").text()!= "ITI";}
					}
					  
					
					
					
					
					 
					
					,graduation:{required: true}
					,g_stream:{required: true}
					,graduation_campus:{required: true}
					,graduation_marks:{required: true}
					,g_pass_year:{required: true}
					
                    
                    
                    
               
                },

                messages: { // custom messages for radio buttons and checkboxes
                	contact_no:
					{
                		required: 'Please enter 10 digit mobile number',		
    					digits:'Only numbers are allowed.',
    					maxlength: jQuery.format("Please don't enter more than 10 numbers."),
    				    minlength: jQuery.format("Please enter atleast 10 numbers.")
					},
					first_name:
					{
						characterOnly:jQuery.format("Please enter characters only.")
					},
                
					last_name:
						{
						characterOnly:jQuery.format("Please enter characters only.")
						},
					collegeCountry:
						{
						characterOnly:jQuery.format("Please enter characters only.")
						},
					collegeState:
							{
					characterOnly:jQuery.format("Please enter characters only.")
							},
						collegeCity:
							{
					characterOnly:jQuery.format("Please enter characters only.")		
							},
					state:
						{
						characterOnly:jQuery.format("Please enter characters only.")
						},
					district:
						{
						characterOnly:jQuery.format("Please enter characters only.")
						},
					city:
					{
						characterOnly:jQuery.format("Please enter characters only.")		
					}
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                	 if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                         error.insertAfter("#form_gender_error");
                     } else if (element.attr("name") == "payment[]") { // for uniform checkboxes, insert the after the given container
                         error.insertAfter("#form_payment_error");
                     } else {
                         error.insertAfter(element); // for other inputs, just perform default behavior
                     }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    Metronic.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });

            var displayConfirm = function() {
            	//alert("Hiii 223");
                $('#tab4 ', form).each(function(){
                	//alert("Hiii 202");
                	
             /*       var input = $('[name="'+$(this).attr("data-display")+'"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="'+$(this).attr("data-display")+'"]:checked', form);
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    } else if ($(this).attr("data-display") == 'payment[]') {
                        var payment = [];
                        $('[name="payment[]"]:checked', form).each(function(){ 
                            payment.push($(this).attr('data-title'));
                        });
                        $(this).html(payment.join("<br>"));
                    }*/
                });
            };
        
            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
               // alert("--total---"+total);
             //   alert("tab----"+tab+"--navigation--"+navigation+"----index---"+index);
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                    
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                Metronic.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                	 
                    return false;
                    
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    handleTitle(tab, navigation, clickedIndex);
                  
                },
                onNext: function (tab, navigation, index) {
                	
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }
                   
                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                	
                    success.hide();
                    error.hide();
                    
                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                    
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function () {
            	
            	var bool=$('#submit_form').valid();
            	//alert(bool)
              //alert('Finished! Hope you like it :)');
            	if(bool){
            	//	alert("submit_loader");
            	document.getElementById("loader1").style.display="block";
            	$('#form_wizard_1 .button-submit').attr("disabled", true);
            	//	alert("submit_loader");
//            	document.getElementById("loader1").style.display="block";
            	$('#form_wizard_1 .button-submit').attr("disabled", true);
            	document.getElementById("submit_form").submit();

            	}

            }).hide();
            
          
            /*.hide()*/

            //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            /*$('#country_list', form).change(function () {
                form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });*/
        }

    };

}();