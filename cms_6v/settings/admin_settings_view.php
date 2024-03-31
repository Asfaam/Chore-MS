<ul class="breadcrumb">
  <li>
  <div>
      <a href="../admin/adminPage.php">
          <i class='bx bxs-dashboard' ></i>
          <span class="text"><strong>Home</strong></span>
      </a> 
  </div>           
  </li> 
  <li class="active">Manage Setting</li>
</ul>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Manage Setting</h3>
		  	</div>
		  	<div class="panel-body">
		  		<div class="col-md-12">
		  			<div id="update-profile-message"></div>
		  		</div>

		  		<div class="col-md-6">
		  			<form action="#" method="post" id="updateProfileForm">
		  			<fieldset>
			    		<legend>Manage Username</legend>
					    <div class="form-group">
					      <label for="username">Username : </label>
					      <input type="text" id="username" name="username" class="form-control" placeholder="Username">
					    </div>
					    <div class="form-group">
					      <label for="fname">First Name : </label>
					      <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name">
					    </div>
					    <div class="form-group">
					      <label for="lname">Last Name : </label>
					      <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name">
					    </div>
					    <div class="form-group">
					      <label for="email">Email : </label>
					      <input type="text" id="email" name="email" class="form-control" placeholder="Email">
					    </div>
					    
					    <button type="submit" class="btn btn-primary">Save Changes</button>
					  </fieldset>
					  </form>
		  		</div>
			    <div class="col-md-6">
			    	<form action="#" method="post" id="changePasswordForm">
		  			<fieldset>
			    		<legend>Change Password</legend>
					    <div class="form-group">
					      	<label for="currentPassword">Current Password : </label>
					      	<input type="password" id="currentPassword" name="currentPassword" class="form-control" placeholder="Current Password" />
					    </div>
					    <div class="form-group">
					      	<label for="newPassword">New Password : </label>
					      	<input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="New Password" />
					    </div>
					    <div class="form-group">
					      	<label for="confirmPassword">Confirm Password : </label>
					      	<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" />
					    </div>
					    <button type="submit" class="btn btn-primary">Change Password</button>
					  </fieldset>
				  	</form>
		  		</div>	
		  	</div>
		</div>
	</div>	
</div>


<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<style>
    /* Breadcrumb */
.breadcrumb {
  margin-top: 20px;
}

/* Panel */
.panel {
  margin-bottom: 20px;
}

.panel-heading {
  background-color: #f5f5f5;
  border-color: #ddd;
}

.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 18px;
}

.panel-body {
  padding: 15px;
}

/* Form */
.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-primary {
  background-color: #337ab7;
  border-color: #2e6da4;
  color: #fff;
}

.btn-primary:hover {
  background-color: #286090;
  border-color: #204d74;
}

.alert {
  margin-top: 20px;
}

/* Optional: Add more custom styles as needed */

</style>
