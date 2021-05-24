<?php require 'header.html'; ?>
<?php require 'navBar.html'; ?>

<?php 

/*	if(isset($_POST['form'])){
		if($_POST['fname'] ==  ""){
			$error_msg ['fname'] = "Field required";
		}
	}
*/
?>

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
				      		<div align="" class="pt-3">
				      			<img class="rounded-circle myBorder-light-green px-1 py-1" src="assests/icons/corona-fighter1.png" width="150" height="150">
				      		</div>
				        	<form method="post" class="px-5 py-4 container-responsive col">
				          	<div class="col-md-8">
					          <div class="input-group mb-3">
								  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
								  <input type="text" class="form-control" placeholder="Username">
							  </div>
						  	</div>
						  	<div class="col-md-8">
					          <div class="input-group mb-3">
								  <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
								  <input type="password" class="form-control" placeholder="Username">
							  </div>
						  	</div>
						  	<div class="col-md-8">
					          <div class="d-grid gap-2 pb-2">
					            <input type="submit" class="btn btn-primary btn-block" id="" value="login">
					          </div>
					      	</div>
				        	</form>
				        </div>
			  		</div>
							<!-- // FOr Registration -->
			        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
			      		<div class="px-2 rounded">
			      			<div align="center" class="alert alert-info pt-3">
			      				<p>If you want to provide the services for covid19 patients. Please register here.</p>
			      			</div>
			        		<form action= "register.php" method="post" class="row g-3 needs-validation" novalidate>
			          			<div class="col-md-6">
			            			<div class="form-group">
			                			<label for=""><span class="compulsory-required">*</span>Full Name (पुरा नाम)</label>
		                				<input type="text" name="fname" max="255" class="form-control" placeholder="Enter Your Full Name" required>
										<?php /*
											if(isset($error_msg['fname'])){
												echo $error_msg['fname'];
											}*/
										?>
		                				<div class="invalid-feedback">Please Enter Valid Name</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
			                			<label for="">Organization Name (संस्थाको नाम )</label>
		                				<input type="text" name="oname" max="255" class="form-control" placeholder="Enter Your Full Name" required="">
		                				<div class="invalid-feedback">Please Enter Valid Name</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Email</label>
						                <input type="text" name="email" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid email.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Username</label>
						                <input type="text" name="uname" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid email.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Contact (primary)</label>
						                <input type="text" name="con1" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">Contact (secondary)</label>
						                <input type="text" name="con2" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Country (देश):</label>
						                <input type="text" name="country" max="100" class="form-control" placeholder="lCountry Name" required="" value="Nepal">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>State ( प्रदेश)</label>
						                <input type="text" name="state" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>District (जिल्ला ):</label>
						                <input type="text" name="district" max="100" class="form-control" placeholder="lCountry Name" required="" value="Nepal">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Municipility/Rural ( नगरपालिका /गाउँपालिका)</label>
						                <input type="text" name="mun" max="100" class="form-control" placeholder="Municipility/Rural" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Service For ( सेवा प्रदान)</label><br><br>
						                <select class="form-select">
						                	<option selected>Select Service</option>
						                	<option>Hospital</option>
						                	<option>Ambuance</option>
						                	<option>Food</option>
						                	<option>Other</option>
						                </select>
						                <div class="invalid-feedback">Please select service you want to provide</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">If other (यदि अन्य)</label>
						                <textarea type="text" class="form-control" placeholder="If other Please Specify" rows="4"></textarea>
						                <div class="invalid-feedback">Please Specify service.</div>
			            			</div>
			            		</div>
			            		<div class="col-12">
								    <div class="form-check">
								      <input
								        class="form-check-input"type="checkbox" value="" id="invalidCheck"
								        required
								      />
								      <label class="form-check-label" for="invalidCheck">
								        Agree to <a style="text-decoration: none;cursor: pointer;"  class="text-info" data-bs-toggle="modal" data-bs-target="#modalForTermsAndConditions">terms and conditions</a>
								      </label>
								      <div class="invalid-feedback">You must agree before submitting.</div>
								    </div>
								</div>
			            		<div class="mb-3">
			            			<div class="form-group">
						                <button type="submit" class="btn btn-success">Register</button>
			            			</div>
			            		</div>
			        		</form>
			      		</div>
			        </div>

		      			<!-- // For working Request------ -->
			      	<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
			      		<div class="px-2 rounded">
			      			<div align="center" class="alert alert-info pt-3">
			      				<p>This is the request form to work as a team member for managing the website.</p>
			      			</div>
			        		<form method="post" class="row g-3 needs-validation" novalidate>   			
			            		<div class="col-md-12">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Full Name (पुरा नाम)</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid Name.</div>
			            			</div>
			            		</div><br>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Email</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid email.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Username</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid Name.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Contact (primary)</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">Contact (secondary)</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Country (देश):</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lCountry Name" required="" value="Nepal">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>State ( प्रदेश)</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lorem.ipsum@gmail.com" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>District (जिल्ला ):</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="lCountry Name" required="" value="Nepal">
						                <div class="invalid-feedback">Please enter a valid Contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Municipility/Rural ( नगरपालिका /गाउँपालिका)</label>
						                <input type="text" name="" max="100" class="form-control" placeholder="Municipility/Rural" required="">
						                <div class="invalid-feedback">Please enter a valid contact no.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for=""><span class="compulsory-required">*</span>Work as( सेवा प्रदान)</label><br><br>
						                <select class="form-select">
						                	<option selected>Select Service</option>
						                	<option>Admin</option>
						                	<option>Editor</option>
						                	<option>Moderator</option>
						                	<option>Advertiser</option>
						                	<option>Analyst</option>
						                	<option>Other</option>
						                </select>
						                <div class="invalid-feedback">Please select work you want to perform as.</div>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="form-group">
						                <label for="">If other (यदि अन्य)</label>
						                <textarea type="text" class="form-control" placeholder="If other Please Specify" rows="4"></textarea>
						                <div class="invalid-feedback">Please Specify Other work you want to provide.</div>
			            			</div>
			            		</div>
			            		<div class="col-12">
								    <div class="form-check">
								      <input
								        class="form-check-input"type="checkbox" value="" id="invalidCheck"
								        required
								      />
								      <label class="form-check-label" for="invalidCheck">
								        Agree to <a style="text-decoration: none;cursor: pointer;"  class="text-info" data-bs-toggle="modal" data-bs-target="#modalForTermsAndConditions">terms and conditions</a>
								      </label>
								      <div class="invalid-feedback">You must agree before submitting.</div>
								    </div>
								</div>

			            		<div class="mb-3">
			            			<div class="form-group">
						                <button class="btn btn-success" type="submit">Register</button>
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
	                				<input type="email" name="" max="255" class="form-control" placeholder="Enter Your email" required="">
	                				<div class="invalid-feedback">Please Enter Valid Email</div>
		            			</div>
		            		</div>
		            		<div class="mb-3">
		            			<div class="form-group">
	                				<button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalForPasswordReset">Reset</button>
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
<!-- Modal for tking otp to reset password -->
<div class="modal fade" id="modalForPasswordReset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="staticBackdropLabel">An email has sent you with an OTP code check it out.</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="px-2 rounded">
        	<div>
	    		<form method="post" class="row g-3 needs-validation" novalidate>
	      			<div class="col-md-6">
	        			<div class="form-group">
	            			<label for="">OTP (six-digit)</label>
	        				<input type="tel" name="" max="6" minlength="6" class="form-control" placeholder="One TIme Password" required="">
	        				<div class="invalid-feedback">Check your spa folder too</div>
	        			</div>
	        		</div>
	        		<div class="col-md-6">
	        			<div class="form-group">
	        				<label></label><br>
	        				<button class="btn btn-success" type="button">Submit</button>
	        			</div>
	        		</div>
	        		<div class="col-md-6">
	        			<div class="form-group">
	        				<a href="">Didn't get?</a>
	        			</div>
	        		</div>
	        	</form>
	        </div>
	        <!-- // IF Input OTP is correct -->
	        <div>
	        	<form method="post" class="row g-3 needs-validation" novalidate>
	        		<div align="center" class="alert alert-info pt-3">
	      				<p>Password Must be of 8 characters</p>
	      			</div>
	      			<div class="mb-3">
	        			<div class="form-group">
	            			<label for="">New Password</label>
	        				<input type="password" name="" max="20" minlength="8" class="form-control" placeholder="Enter New Password" required="">
	        				<div class="invalid-feedback">Password Must be</div>
	        			</div>
	        		</div>
	        		<div class="mb-3">
	        			<div class="form-group">
	            			<label for="">Conform Password</label>
	        				<input type="password" name="" max="20" minlength="8" class="form-control" placeholder="Conform New Password" required="">
	        				<div class="invalid-feedback">Password Must be</div>
	        			</div>
	        		</div>
	        		<div class="mb-3">
	        			<div class="form-group">
	        				<button class="btn btn-success" type="button">Submit</button>
	        			</div>
	        		</div>
	        	</form>
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