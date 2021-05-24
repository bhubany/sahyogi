<?php require 'header.html'; ?>
<?php require 'navBar.html'; ?>


<div class="myBorder-blue">
	<div class="row py-1">
		<div class="col-sm-1 col-md-2 col-lg-3"></div>
		<div class="col-xs-12 col-sm-10 col-lg-6 col-md-8 myCard-view py-2">
			<div class="px-3 py-3">
	      		<ul class="nav nav-tabs" id="myTab" role="tablist">
	        		<li class="nav-item" role="presentation">
	          			<button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
	        		</li>
			        <li class="nav-item" role="presentation">
			          <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
			        </li>
			        <li class="nav-item" role="presentation">
			          <button class="nav-link" id="request-tab" data-bs-toggle="tab" data-bs-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Request</button>
			        </li>
			        <li class="nav-item" role="presentation">
			          <button class="nav-link" id="passwordReset-tab" data-bs-toggle="tab" data-bs-target="#passwordReset" type="button" role="tab" aria-controls="passwordReset" aria-selected="false">Password Reset</button>
			        </li>
			    </ul>
	     		<div class="tab-content" id="myTabContent">
		      			<!-- // Login Form -->
			      	<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
			      		<div class="px-2 rounded" align="center">
			      			<div id="loginResponseMessage" class="hideContent alert">
			      				<p></p>
			      			</div>
				      		<div align="" class="pt-3">
				      			<img class="rounded-circle myBorder-light-green px-1 py-1" src="assests/icons/corona-fighter1.png" width="150" height="150">
				      		</div>
				        	<form id="loginForm" method="post" class="px-5 py-4 container-responsive col">
				          	<div class="col-md-8">
					          <div class="input-group mb-3">
								  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								  <input id="loginUsername" type="text" class="form-control" placeholder="Username">
							  </div>
						  	</div>
						  	<div class="col-md-8">
					          <div class="input-group mb-3">
								  <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
								  <input id="loginPassword" type="password" class="form-control" placeholder="Username">
							  </div>
						  	</div>
						  	<div class="col-md-8">
					          <div class="d-grid gap-2 pb-2">
					            <input id="loginSubmit" type="button" class="btn btn-primary btn-block" id="" value="login">
					          </div>
					      	</div>
				        	</form>
				        </div>
			  		</div>
							<!-- // FOr Registration -->
			        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
			      		<div class="px-2 rounded">
			      			<div id="serviceProviderResponseMessage" align="center" class="alert alert-info pt-3">
			      				<p>If you want to provide the services for covid19 patients. Please register here.<br>Password must be at least 8 characters and atmost 20 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</p>
			      			</div>
			        		<form id="serviceProviderForm" method="post" class="row g-3 needs-validation" novalidate>
			          			<div class="col-md-6">
			            			<div class="form-group">
			                			<label for=""><span class="compulsory-required">*</span>Full Name (पुरा नाम)</label>
		                				<input id="serviceProviderFullName" type="text" name="" max="255" class="form-control" placeholder="Enter Your Full Name" required="">
		                				<div id="serviceProviderInvalidname" class="invalid-feedback">Please Enter Valid Name</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
			                			<label for="">Organization Name (संस्थाको नाम )</label>
		                				<input id="serviceProviderOrgName" type="text" name="" max="255" class="form-control" placeholder="Enter Your organization Name" required="">
		                				<div id="serviceProviderInvalidOrgName" class="invalid-feedback">Please Enter Valid Name</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Email</label>
						                <input id="serviceProviderEmail" type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div id="serviceProviderInvalidEmail" class="invalid-feedback">Please enter a valid email.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Username</label>
						                <input id="serviceProviderUsername" type="text" name="" max="100" class="form-control" placeholder="Enter username" required="">
						                <div id="serviceProviderInvalidUsername" class="invalid-feedback">Please enter a valid Username. Username can only be number and alphabets.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Password</label>
						                <input id="serviceProviderPassword" type="password" name="" max="100" class="form-control" placeholder="Enter Password" required="">
						                <div id="serviceProviderInvalidPassword" class="invalid-feedback">Please match the above mentioned criteria for Password.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Conform Password</label>
						                <input id="serviceProviderConfPassword" type="password" name="" max="100" class="form-control" placeholder="Conform Password" required="">
						                <div id="serviceProviderPasswordDidnot Matched" class="invalid-feedback">Both password did not matched.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Contact (primary)</label>
						                <input id="serviceProviderContactPrimary" type="text" name="" max="100" class="form-control" placeholder="98XXXXXXXX" required="">
						                <div id="serviceProviderInvalidContactPrimary" class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">Contact (secondary)</label>
						                <input id="serviceProviderContactSecondary" type="text" name="" max="100" class="form-control" placeholder="98XXXXXXXX" required="">
						                <div id="serviceProviderInvalidContactSecondary" class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Country (देश):</label>
						                <input id="serviceProviderCountry" type="text" name="" max="100" class="form-control" placeholder="Country Name" required="" value="Nepal">
						                <div id="serviceProviderInvalidCountry" class="invalid-feedback">Please Select your Country.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>State ( प्रदेश)</label>
						                <input id="serviceProviderState" type="text" name="" max="100" class="form-control" placeholder="ENter your state name" required="">
						                <div id="serviceProviderInvalidState" class="invalid-feedback">Please select your state.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>District (जिल्ला ):</label>
						                <input id="serviceProviderDistrict" type="text" name="" max="100" class="form-control" placeholder="Select District Name" required="" value="Nepal">
						                <div id="serviceProviderInvalidDistrict" class="invalid-feedback">Please select your District.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Municipility/Rural ( नगरपालिका /गाउँपालिका)</label>
						                <input id="serviceProviderMunicipility" type="text" name="" max="100" class="form-control" placeholder="Municipility/Rural" required="">
						                <div id="serviceProviderInvalidMunicipility" class="invalid-feedback">Please select your rural/municipility.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Service For ( सेवा प्रदान)</label><br><br>
						                <select id="serviceProviderService" class="form-select">
						                	<option value="notSelected">Select Service</option>
						                	<option>Hospital</option>
						                	<option>Ambuance</option>
						                	<option>Food</option>
						                	<option>Other</option>
						                </select>
						                <div id="serviceProviderInvalidService" class="invalid-feedback">Please select service you want to provide</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">If other (यदि अन्य)</label>
						                <textarea id="serviceProviderIfOther" type="text" class="form-control" placeholder="If other Please Specify" rows="4"></textarea>
						                <div id="serviceProviderInvalidIfOther" class="invalid-feedback">Please Specify Other service you want to provide.</div>
			            			</div>
			            		</div>
			            		<div class="col-12">
								    <div class="form-check">
								      <input id="serviceProviderTerms" 
								        class="form-check-input"type="checkbox" value=""
								        required
								      />
								      <label class="form-check-label" for="invalidCheck">
								        Agree to <a style="text-decoration: none;cursor: pointer;"  class="text-info" data-bs-toggle="modal" data-bs-target="#modalForTermsAndConditions">terms and conditions</a>
								      </label>
								      <div id="serviceProviderInvalidTerms" class="invalid-feedback">You must agree before submitting.</div>
								    </div>
								</div>
			            		<div class="mb-3">
			            			<div class="form-group">
						                <button id="serviceProviderRegister" type="button" class="btn btn-success">Register</button>
			            			</div>
			            		</div>
			        		</form>
			      		</div>
			        </div>

		      			<!-- // For working Request------ -->
			      	<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
			      		<div class="px-2 rounded">
			      			<div id="requestResponseMessage" align="" class="alert alert-info pt-3">
			      				<p>This is the request form to work as a team member for managing the website. <br>Password must be at least 8 characters and atmost 20 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</p>
			      			</div>
			        		<form id="workRequestForm" method="post" class="row g-3 needs-validation" novalidate>   			
			            		<div class="col-md-12">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Full Name (पुरा नाम)</label>
						                <input id="workRequestName" type="text" name="" max="100" class="form-control" placeholder="lorem ipsum" required="">
						                <div id="workRequestInvalidName" class="invalid-feedback">Please enter a valid Name.</div>
			            			</div>
			            		</div><br>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Email</label>
						                <input id="workRequestEmail" type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div id="workRequestInvalidEmail" class="invalid-feedback">Please enter a valid email.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Username</label>
						                <input id="workRequestUsername" type="text" name="" max="100" class="form-control" placeholder="ilorem12" required="">
						                <div id="workRequestInvalidUsername" class="invalid-feedback">Please enter a valid Username. Username can only be number and alphabets.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Password</label>
						                <input id="workRequestPassword" type="password" name="" max="100" class="form-control" placeholder="Enter password" required="">
						                <div id="workRequestInvalidPassword" class="invalid-feedback">Please match the above mentioned criteria for Password.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Conform Password</label>
						                <input id="workRequestConfPassword" type="password" name="" max="100" class="form-control" placeholder="Conform Password" required="">
						                <div id="workRequestPasswordDidnotMatched" class="invalid-feedback">Both password did not matched.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Contact (primary)</label>
						                <input id="workRequestContactPrimary" type="tel" name="" max="100" class="form-control" placeholder="98XXXXXXXX" required="">
						                <div id="workRequestInvalidContactPrimary" class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">Contact (secondary)</label>
						                <input id="workRequestContactSecondary" type="tel" name="" max="100" class="form-control" placeholder="98XXXXXXXX" required="">
						                <div id="workRequestInvalidContactSecondary" class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Country (देश):</label>
						                <input id="workRequestCountry" type="text" name="" max="100" class="form-control" placeholder="Country Name" required="" value="Nepal">
						                <div id="workRequestInvalidCountry" class="invalid-feedback">Please Select your Country.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>State ( प्रदेश)</label>
						                <input id="workRequestState" type="text" name="" max="100" class="form-control" placeholder="Select your State" required="">
						                <div id="workRequestInvalidState" class="invalid-feedback">Please select your state.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>District (जिल्ला ):</label>
						                <input id="workRequestDistrict" type="text" name="" max="100" class="form-control" placeholder="Select your District" required="">
						                <div id="workRequestInvalidDistrict" class="invalid-feedback">Please select your district.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Municipility/Rural ( नगरपालिका /गाउँपालिका)</label>
						                <input id="workRequestMunicipility" type="text" name="" max="100" class="form-control" placeholder="Municipility/Rural" required="">
						                <div id="workRequestInvalidMunicipility" class="invalid-feedback">Please select your rural/municipility</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Work as( सेवा प्रदान)</label><br><br>
						                <select id="workRequestService" class="form-select">
						                	<option value="notSelected">Select Service</option>
						                	<option value="admin">Admin</option>
						                	<option value="editor">Editor</option>
						                	<option value="moderator">Moderator</option>
						                	<option value="advertiser">Advertiser</option>
						                	<option value="analyst">Analyst</option>
						                	<option value="other">Other</option>
						                </select>
						                <div id="workRequestInvalidService" class="invalid-feedback">Please select the service you want to provide.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">If other (यदि अन्य)</label>
						                <textarea id="workRequestIfOther" type="text" class="form-control" placeholder="If other Please Specify" rows="4"></textarea>
						                <div id="workRequestInvalidOtherService" class="invalid-feedback">Please Specify Other work you want to provide.</div>
			            			</div>
			            		</div>
			            		<div class="col-12">
								    <div class="form-check">
								      <input id="workRequestAgreeToTerms" 
								        class="form-check-input" type="checkbox"
								        required
								      />
								      <label class="form-check-label" for="invalidCheck">
								        Agree to <a style="text-decoration: none;cursor: pointer;"  class="text-info" data-bs-toggle="modal" data-bs-target="#modalForTermsAndConditions">terms and conditions</a>
								      </label>
								      <div id="workRequestInvalidAgreeToTerms" class="invalid-feedback">You must agree before submitting.</div>
								    </div>
								</div>

			            		<div class="mb-3">
			            			<div class="form-group">
						                <button id="workRequestRegister" class="btn btn-success" type="button">Register</button>
			            			</div>
			            		</div>
			            	</form>
			            </div>   
			    	</div>

		    			<!-- // For Password Reset------ -->
		      	<div class="tab-pane fade" id="passwordReset" role="tabpanel" aria-labelledby="passwordReset-tab">
		      		<div class="px-2 rounded">
		        		<form method="post" class="row g-3 needs-validation" novalidate>
		          			<div class="mb-3">
		            			<div class="form-group">
		                			<label for="">Email</label>
	                				<input type="email" name="" id="enteredResetEmail" class="form-control" placeholder="Enter Your email" required="" >
	                				<div id="invalidResetEmail" class="invalid-feedback">Please Enter Valid Email</div>
		            			</div>
		            		</div>
		            		<div class="mb-3">
		            			<div class="form-group">
	                				<button id="submitResetEmail" class="btn btn-success" type="button">Reset</button>
		            			</div>
		            		</div>
		            	</form>
		            </div>
            	</div>    
			</div>
		</div>
	  </div>
	  <div class="col-sm-1 col-md-2 col-lg-3">
	</div>
</div>
</div>





<!-- ------------Different Modals---------- -->
<!-- // Login Otp Verification -->
<div class="modal fade" id="modalForAccountOtpVerification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verify your Account.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div id="accountVerificationResponse" class="hideContent alert ">
      		<p></p>
      	</div>
        <div id="accountVerificationOtpbox">
    		<form method="post" class="row g-3 needs-validation" novalidate>
    			<div align="center" class="alert alert-info pt-3">
    				<p>An email has sent you with an OTP code check it out.</p>
    			</div>
      			<div class="col-md-6">
        			<div class="form-group">
            			<label for="">OTP (six-digit)</label>
        				<input id="accountVerificationEnteredOtp" type="tel" name="" maxlength="6" minlength="6" class="form-control" placeholder="One Time Password" required="/">
        				<div id="accountVerificationInvalidOtp" class="invalid-feedback">Otp must be of 6-digit code. Check your spam folder too.</div>
        			</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
        				<label></label><br>
        				<button class="btn btn-success" type="button" id="submitAccountVerificationOtp">Submit</button>
        			</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
        				<a type="button" class="text-info noTextDecoration" id="resendOtpCode">Didn't get?</a>
        			</div>
        		</div>
        	</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for tking otp to reset password -->
<div class="modal fade" id="modalForPasswordReset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="staticBackdropLabel">Password reset</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="px-2 rounded">
        	<div id="inputOtpbox">
	    		<form method="post" class="row g-3 needs-validation" novalidate>
	    			<div align="center" class="alert alert-info pt-3">
	    				<p>An email has sent you with an OTP code check it out.</p>
	    			</div>
	      			<div class="col-md-6">
	        			<div class="form-group">
	            			<label for="">OTP (six-digit)</label>
	        				<input id="enteredOtp" type="tel" name="" maxlength="6" minlength="6" class="form-control" placeholder="One Time Password" required="/">
	        				<div id="wrongOtp" class="invalid-feedback">Otp must be of 6-digit code. Check your spam folder too.</div>
	        			</div>
	        		</div>
	        		<div class="col-md-6">
	        			<div class="form-group">
	        				<label></label><br>
	        				<button class="btn btn-success" type="button" id="submitOtp">Submit</button>
	        			</div>
	        		</div>
	        		<div class="col-md-6">
	        			<div class="form-group">
	        				<a type="button" class="text-info noTextDecoration" id="resendOtpCode">Didn't get?</a>
	        			</div>
	        		</div>
	        	</form>
	        </div>
	        <!-- // IF Input OTP is correct -->
	        <div id="inputNewPassword" class="hideContent">
	        	<form method="post" class="row g-3 needs-validation" novalidate>
	        		<div align="center" class="alert alert-info pt-3">
	      				<p>Password must be at least 8 characters and atmost 20 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</p>
	      			</div>
	      			<div class="mb-3">
	        			<div class="form-group">
	            			<label for="">New Password</label>
	        				<input id="enteredNewPassword" type="password" name="" max="20" minlength="8" class="form-control" placeholder="Enter New Password" required="">
	        				<div id="invalidPassword" class="invalid-feedback">Invalid Password. Please match above criteria</div>
	        			</div>
	        		</div>
	        		<div class="mb-3">
	        			<div class="form-group">
	            			<label for="">Conform Password</label>
	        				<input id="enteredConformPassword" type="password" name="" max="20" minlength="8" class="form-control" placeholder="Conform New Password" required="">
	        				<div id="bothPasswordNotMatched" class="invalid-feedback">Both Password did not matched</div>
	        			</div>
	        		</div>
	        		<div class="mb-3">
	        			<div class="form-group">
	        				<button class="btn btn-success" type="button" id="submitNewPassword">Submit</button>
	        			</div>
	        		</div>
	        	</form>
	        </div>
	        <!-- // Password changed sucessfully -->
	        <div id="passwordResetSucess" class="hideContent">
	        	<div id="messageClass" class="alert alert-success">
	        		<p><i class="fa fa-tick">&nbsp;</i> Your Password has been reset sucessfully. Try login.</p>
	        	</div>
	        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- ---------------Terms And Conditions Modals------ -->
<div class="modal fade" id="modalForTermsAndConditions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php require 'footer.html'; ?>