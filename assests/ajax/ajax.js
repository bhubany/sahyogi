$(document).ready(function(){
	// criterias
	var number = /[0-9]/g;
	var uppercase = /[A-Z]/g;
	var lowercase = /[a-z]/g;
	var specialChars = /[^\w]/g;
	var error=0;
	var nameCriteria=/^[a-zA-Z\s]+$/g;
	var emailCriteria=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var usernameCriteria=/^([a-zA-Z0-9_-])+$/g;

	// for login
		$('#loginSubmit').click(function(){
		error=0;
		var username= $('#loginUsername').val();
		var password= $('#loginPassword').val();

		// validation
		if (!username || !password) {
			$('#loginResponseMessage').show();
			$('#loginResponseMessage').addClass('alert-danger');
			$('#loginResponseMessage >p').text('Username or Password cannot be empty');
			error+=1;
		}else if (!username.match(emailCriteria) && !username.match(usernameCriteria)){
			$('#loginResponseMessage').show();
			$('#loginResponseMessage').addClass('alert-danger');
			$('#loginResponseMessage >p').text('Invalid Username.');
			error+=1;
		}else{
			$('#loginResponseMessage').hide();
		}
		// alert(error);
		if (error==0) {
			// transferring data to server side
			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					loginUsername: username,
					loginPassword:password
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {
			  			// redirect to next page
			  			alert("Success");
					}else if (jsonData.success==2) {
			  			// pending for otp verification
			  			$('#modalForAccountOtpVerification').modal('show');
					}else{
						$('#loginResponseMessage').show();
						$('#loginResponseMessage').addClass('alert-danger');
						$('#loginResponseMessage >p').text('Wrong Username or Password.');
					}
				}
			});
		}

	});

	// For account Verification
	$("#submitAccountVerificationOtp").click(function(){
		var otp=$('#accountVerificationEnteredOtp').val();
		if (otp.length==6 && ($.isNumeric(otp))) {
			//Matching otp to database
			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					accountVerificationOtp: otp
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {
						$('#accountVerificationOtpbox').hide();
						$('#accountVerificationResponse').show();
						$('#accountVerificationResponse').addClass('alert-success');
						$('#accountVerificationResponse').text('Your Account hasbeen verified Sucessfully. Try login');
					}else{
						$('#accountVerificationInvalidOtp').show();
						$('#accountVerificationInvalidOtp').text("Invalid OTP. please provide correct one.");
					}
				}
			});		
		}else{
			$('#accountVerificationInvalidOtp').show();
		}
	});

	// for service provider registration
	$('#serviceProviderRegister').click(function(){
		error=0;
		var fullName= $('#serviceProviderFullName').val();
		var orgName= $('#serviceProviderOrgName').val();
		var email=$('#serviceProviderEmail').val();
		var uname=$('#serviceProviderUsername').val();
		var password=$('#serviceProviderPassword').val();
		var conformPassword=$('#serviceProviderConfPassword').val();
		var contactPrimary=$('#serviceProviderContactPrimary').val();
		var contactSecondary=$('#serviceProviderContactSecondary').val();
		var country=$('#serviceProviderCountry').val();
		var state=$('#serviceProviderState').val();
		var district=$('#serviceProviderDistrict').val();
		var municipility=$('#serviceProviderMunicipility').val();
		var service=$('#serviceProviderService').val();
		var otherService=$('#serviceProviderIfOther').val();

		// validation
		if (!fullName || !fullName.match(nameCriteria) || fullName.length<3) {
			$('#serviceProviderInvalidname').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidname').hide();
		}
		if (orgName){
			if(!orgName || orgName.match(usernameCriteria)) {
				$('#serviceProviderInvalidOrgName').show();
				error+=1;
			}
		}else{
			$('#serviceProviderInvalidOrgName').hide();
		}
		if (!email || !email.match(emailCriteria)) {
			$('#serviceProviderInvalidEmail').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidEmail').hide();
		}
		if (!uname || !uname.match(usernameCriteria)) {
			$('#serviceProviderInvalidUsername').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidUsername').hide();
		}
		if (!conformPassword || !password ||(password!=conformPassword)) {
			$('#serviceProviderPasswordDidnot').show();
			error+=1;
		}else {
			var pwd=conformPassword;
			if (pwd.length<8 || pwd.length>20 || !pwd.match(number) || !pwd.match(uppercase) || !pwd.match(lowercase) || !pwd.match(specialChars)) {
				$('#serviceProviderPasswordDidnot').hide();
				$('#serviceProviderInvalidPassword').show();
				error+=1;
			}else{
				$('#serviceProviderPasswordDidnot').hide();
				$('#serviceProviderInvalidPassword').hide();
			}
		}			
		if (!contactPrimary || !($.isNumeric(contactPrimary)) || contactPrimary.length<7 || contactPrimary.length>10) {
			$('#serviceProviderInvalidContactPrimary').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidContactPrimary').hide();
		}
		if (contactSecondary){
			if(!($.isNumeric(contactSecondary)) || contactSecondary.length<7 || contactSecondary.length>10) {
				$('#serviceProviderContactSecondary').show();
				error+=1;
			}
		}else{
			$('#serviceProviderContactSecondary').hide();
		}
		if (!country) {
			$('#serviceProviderInvalidCountry').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidCountry').hide();
		}
		if (!state) {
			$('#serviceProviderInvalidState').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidState').hide();
		}
		if (!district) {
			$('#serviceProviderInvalidDistrict').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidDistrict').hide();
		}
		if (!municipility) {
			$('#serviceProviderInvalidMunicipility').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidMunicipility').hide();
		}
		if (service=='notSelected') {
			$('#serviceProviderInvalidService').show();
			error+=1;
		}else if (service=='other' && !otherService) {
			$('#serviceProviderInvalidService').hide();
			$('#serviceProviderInvalidIfOther').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidService').hide();
			$('#serviceProviderInvalidIfOther').hide();	
		}
		if (!$('#serviceProviderTerms').is(":checked")) {
			$('#serviceProviderInvalidTerms').show();
			error+=1;
		}else{
			$('#serviceProviderInvalidTerms').hide();	
		}
		// alert(error);
		if (error==0) {
			// transferring data to server side
			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					serviceProviderFullName: fullName,
					serviceProviderEmail:email,
					serviceProviderUname:uname,
					serviceProviderPassword:password,
					serviceProviderConformPassword:password,
					serviceProviderContactPrimary:contactPrimary,
					serviceProviderContactSecondary:contactSecondary,
					serviceProviderCountry:country,
					serviceProviderState:state,
					serviceProviderDistrict:district,
					serviceProviderMunicipility:municipility,
					serviceProviderService:service,
					serviceProviderOtherService:otherService
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {
			  			$('#workRequestForm').hide();
			  			$('#requestResponseMessage').removeClass('alert-info');
						$('#requestResponseMessage').addClass('alert-success');	
						$('#requestResponseMessage >p').text('You havebeen registered Sucessfully. Try Login and verify your email.');
					}else{
						alert("Email already registered try login");
						$('#requestResponseMessage').removeClass('alert-info');
						$('#requestResponseMessage').addClass('alert-danger');
						$('#requestResponseMessage >p').text("This email is already registered . Try Login.");
					}
				}
			});
		}

	});


	// work request Registeration
	$('#workRequestRegister').click(function(){
		error=0;
		var fullName= $('#workRequestName').val();
		var email=$('#workRequestEmail').val();
		var uname=$('#workRequestUsername').val();
		var password=$('#workRequestPassword').val();
		var conformPassword=$('#workRequestConfPassword').val();
		var contactPrimary=$('#workRequestContactPrimary').val();
		var contactSecondary=$('#workRequestContactSecondary').val();
		var country=$('#workRequestCountry').val();
		var state=$('#workRequestState').val();
		var district=$('#workRequestDistrict').val();
		var municipility=$('#workRequestMunicipility').val();
		var service=$('#workRequestService').val();
		var otherService=$('#workRequestIfOther').val();

		// validation
		if (!fullName || !fullName.match(nameCriteria) || fullName.length<3) {
			$('#workRequestInvalidName').show();
			error+=1;
		}else{
			$('#workRequestInvalidName').hide();
		}
		if (!email || !email.match(emailCriteria)) {
			$('#workRequestInvalidEmail').show();
			error+=1;
		}else{
			$('#workRequestInvalidEmail').hide();
		}
		if (!uname || !uname.match(usernameCriteria)) {
			$('#workRequestInvalidUsername').show();
			error+=1;
		}else{
			$('#workRequestInvalidUsername').hide();
		}
		if (!conformPassword || !password ||(password!=conformPassword)) {
			$('#workRequestPasswordDidnotMatched').show();
			error+=1;
		}else {
			var pwd=conformPassword;
			if (pwd.length<8 || pwd.length>20 || !pwd.match(number) || !pwd.match(uppercase) || !pwd.match(lowercase) || !pwd.match(specialChars)) {
				$('#workRequestPasswordDidnotMatched').hide();
				$('#workRequestInvalidPassword').show();
				error+=1;
			}else{
				$('#workRequestPasswordDidnotMatched').hide();
				$('#workRequestInvalidPassword').hide();
			}
		}			
		if (!contactPrimary || !($.isNumeric(contactPrimary)) || contactPrimary.length<7 || contactPrimary.length>10) {
			$('#workRequestInvalidContactPrimary').show();
			error+=1;
		}else{
			$('#workRequestInvalidContactPrimary').hide();
		}
		if (contactSecondary){
			if(!($.isNumeric(contactSecondary)) || contactSecondary.length<7 || contactSecondary.length>10) {
				$('#workRequestInvalidContactSecondary').show();
				error+=1;
			}
		}else{
			$('#workRequestInvalidContactSecondary').hide();
		}
		if (!country) {
			$('#workRequestInvalidCountry').show();
			error+=1;
		}else{
			$('#workRequestInvalidCountry').hide();
		}
		if (!state) {
			$('#workRequestInvalidState').show();
			error+=1;
		}else{
			$('#workRequestInvalidState').hide();
		}
		if (!district) {
			$('#workRequestInvalidDistrict').show();
			error+=1;
		}else{
			$('#workRequestInvalidDistrict').hide();
		}
		if (!municipility) {
			$('#workRequestInvalidMunicipility').show();
			error+=1;
		}else{
			$('#workRequestInvalidMunicipility').hide();
		}
		if (service=='notSelected') {
			$('#workRequestInvalidService').show();
			error+=1;
		}else if (service=='other' && !otherService) {
			$('#workRequestInvalidService').hide();
			$('#workRequestInvalidOtherService').show();
			error+=1;
		}else{
			$('#workRequestInvalidService').hide();
			$('#workRequestInvalidOtherService').hide();	
		}
		if (!$('#workRequestAgreeToTerms').is(":checked")) {
			$('#workRequestInvalidAgreeToTerms').show();
			error+=1;
		}else{
			$('#workRequestInvalidAgreeToTerms').hide();	
		}
		// alert(error);
		if (error==0) {
			// transferring data to server side
			$.ajax({
				url: "assests/includes/ajaxReceivedData.php",
				type: 'post',
				data: {	
					workRequestFullName: fullName,
					workRequestEmail:email,
					workRequestUname:uname,
					workRequestPassword:password,
					workRequestConformPassword:password,
					workRequestContactPrimary:contactPrimary,
					workRequestContactSecondary:contactSecondary,
					workRequestCountry:country,
					workRequestState:state,
					workRequestDistrict:district,
					workRequestMunicipility:municipility,
					workRequestService:service,
					workRequestOtherService:otherService
				},

				success:function(response){
					var jsonData= JSON.parse(response);
					if (jsonData.success==1) {
			  			$('#workRequestForm').hide();
			  			$('#requestResponseMessage').removeClass('alert-info');
						$('#requestResponseMessage').addClass('alert-success');	
						$('#requestResponseMessage >p').text('You havebeen registered Sucessfully. Try Login and verify your email.');
					}else{
						alert("Email already registered try login");
						$('#requestResponseMessage').removeClass('alert-info');
						$('#requestResponseMessage').addClass('alert-danger');
						$('#requestResponseMessage >p').text("This email is already registered . Try Login.");
					}
				}
			});
		}

	});

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
		// var number = /[0-9]/g;
		// var uppercase = /[A-Z]/g;
		// var lowercase = /[a-z]/g;
		// var specialChars = /[^\w]/g;
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
