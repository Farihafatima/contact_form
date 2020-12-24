<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Contact Form</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="form.php" method="post">
				 <div class="form-group">
					 <hr>
					 <div><h2><center>Employee Form</center></h2></div>
					 <hr>
					 <h4>Personal Details:</h4>
					 <hr>
					 <div class="form-group my-3">
					   <div class="row">
							<div class="col-md-6">
								<label for="first_name">First Name</label>
					            <input type="text" name="first_name" placeholder="fariha" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="last_name">Last Name</label>
					            <input type="text" name="last_name" placeholder="fatima" class="form-control">
							</div>
						</div>
					 </div>
					 <div class="form-group">
					 	<div class="row">
					 		<div class="col-md-6">
					 			<label for="employee_id">Employee ID</label>
					 			<input value="<?= mt_rand(10000, 99999) ?>" type="number" name="employee_id" placeholder="employee_id" class="form-control" >
					 		</div>
					 		<div class="col-md-6">
					 			<label for="Date-of-birth">Date-of-birth</label>
					 			<input type="date" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control">
					 		</div>
					 	</div>
					 </div>
					 <div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" placeholder="Email" class="form-control">
					 </div>
					 <h4>Contact Details:</h4>
					 <hr>
					 <div class="form-group my-3">
					 	<label for="address_1">Address 1</label>
					 	<input type="text" name="address_1" placeholder="Address" class="form-control">	
					 </div>
					 <div class="form-group">
					 	<label for="address_2">Address 2</label>
					 	<input type="text" name="address_2" placeholder="Address" class="form-control">
					 </div>
					 <div class="form-group">
					 	<div class="row">
					 		<div class="col-md-6">
					 			<label for="mobile_contact">Mobile-Contact</label>
					 			<input type="text" name="mobile_contact" placeholder="contact" class="form-control">
					 		</div>
					 		<div class="col-md-6">
					 			<label for="landline_contact">Landline-Contact</label>
					 			<input type="text" name="landline_contact" placeholder="contact" class="form-control">
					 		</div>
					 	</div>
					 </div>
					 <div class="form-group">
					 	<div class="row">
					 		<div class="col-md-4">
					 			<label for="city">City</label>
					 			<input type="text" name="city" placeholder="city" class="form-control">
					 		</div>
					 		<div class="col-md-4">
					 			<label for="country">Country</label>
					 			<input type="text" name="country" placeholder="country" class="form-control">
					 		</div>
					 		<div class="col-md-4">
					 			<label for="state">State</label>
					 			<input type="text" name="state" placeholder="state" class="form-control">
					 		</div>
					 	</div>
					 </div>
					 <h4>Experience Details:</h4>
					 <hr>
					 <div class="form-group">
					 	<div class="row">
					 		<div class="col-md-6">
					 			<label for="experience">Experience</label>
					 			<input type="text" name="experience" placeholder="experience" class="form-control">
					 		</div>
					 		<div class="col-md-6">
					 			<label for="last_job">Last Job</label>
					 			<input type="text" name="last_job" placeholder="last_job" class="form-control">
					 		</div>
					 	</div>
					 </div>
					 <div class="form-group">
					 	<div class="row">
					 		<div class="col-md-6">
					 			<label for="joining_date">Joining Date</label>
					 			<input type="date" name="joining_date" placeholder="joining_date" class="form-control">
					 		</div>
					 		<div class="col-md-6">
					 			<label for="left_date">Left Date</label>
					 			<input type="date" name="left_date" placeholder="left_date" class="form-control">
					 		</div>
					 	</div>
					 </div>
					 <h4>Educational Details:</h4>
					 <hr>
					  <div class="form-group">
					 	<label for="last_degree">Last Degree</label>
					 	<input type="text" name="last_degree" placeholder="degree" class="form-control">
					  </div>
					  <button class="btn btn-dark" type="submit">Submit</button>
					 </div>
				 </div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>