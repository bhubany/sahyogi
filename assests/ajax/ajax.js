$(document).ready(function(){
	// for reset email
	$("#submitResetEmail").click(function(){
		var email =$('#enteredResetEmail').val();
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  		if(!regex.test(email)) {
    		$('#invalidResetEmail').show();
  		}else{
  			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					resetEmail: email
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {		
			  			$('#invalidResetEmail').hide();   		
						$('#modalForPasswordReset').modal('show');
					}else{
						$('#invalidResetEmail').show();
						$('#invalidResetEmail').text("This email is not registered yet. Try registering.");
					}
				}
			});
  		}
	});

	// for otp
	$("#submitOtp").click(function(){
		var otp=$('#enteredOtp').val();
		if (otp.length==6 && ($.isNumeric(otp))) {
			//Matching otp to database
			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					otp: otp
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {
						$('#inputOtpbox').hide();
						$('#inputNewPassword').show();
					}else{
						$('#wrongOtp').show();
						$('#wrongOtp').text("Invalid OTP. please provide correct one.");
					}
				}
			});		
		}else{
			$('#wrongOtp').show();
		}
	});

		// for password
	$('#submitNewPassword').click(function(){
		var newPassword=$('#enteredNewPassword').val();
		var conformPassword=$('#enteredConformPassword').val();
		var number = /[0-9]/g;
		var uppercase = /[A-Z]/g;
		var lowercase = /[a-z]/g;
		var specialChars = /[^\w]/g;
		if (newPassword!=conformPassword) {
			$('#bothPasswordNotMatched').show();
		}else {
			var pwd=conformPassword;
			if (pwd.length>8 && pwd.length<20 && pwd.match(number) && pwd.match(uppercase) && pwd.match(lowercase) && pwd.match(specialChars)) {
				// Transfer password to the database using Ajax
				$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					newPassword: newPassword,
					conformPassword: conformPassword
				},

				success:function(response){
					var jsoData= JSON.parse(response);
					if (jsoData.success==1) {
						$('#inputNewPassword').hide();
						$('#passwordResetSucess').show();
					}else{
						$('#inputNewPassword').hide();
						$("#passwordResetSucess").show();
						$("#passwordResetSucess >div").removeClass('alert-success');
						$("#passwordResetSucess >div").addClass('alert-danger');
						$('#passwordResetSucess >div >p').text("Error occurs while changing password.<br> Try again later.");
					}
				}
			});	
				
			}else {
				$("#invalidPassword").show();
			}
		}
	});
});
