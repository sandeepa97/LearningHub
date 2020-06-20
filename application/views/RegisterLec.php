<?php include 'partials/header.php'?>


<div class="container">

    <h2>Lecturer Registration</h2>

    <?php if ($this->session->flashdata('msg')){

        echo "<h3>".$this->session->flashdata('msg')."</h3>";

    }

    ?>

    <hr>
	
    <font color="#ff0000"><?php echo validation_errors(); ?></font>
    <?php echo form_open('RegisterLec/RegisterUserLec'); ?>



		
		<div class="form-group">
			
			  <input type="radio" name="title" value="male"> Mr. 
			  <input type="radio" name="title" value="female"> Ms. 
			  <input type="radio" name="title" value="other"> Mrs.
			
		</div>
		
        <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name" name="fname">
        </div>

		<div class="form-group">
            <label for="exampleInputPassword1">Surname</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Surname" name="lname">
        </div>
		
		<div class="form-group">
			
			  <input type="radio" name="gender" value="male"> Male
			  <input type="radio" name="gender" value="female"> Female
			
		</div>

		
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Highest Qualification</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Highest Qualification" name="qualification">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Number of Years of Experiance</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Number of Years of Experiance" name="experiance">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Domain Knowledge</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Domain Knowledge" name="knowledge">
        </div>
		
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="passwordagain">
        </div>

        <div class="form-group">
            <label>Upload Your Profile Image</label>
            <input type="file" name="pic" accept="image/*">
        </div>

		
		
        <button type="submit" class="btn btn-default">Submit</button>
   <?php echo form_close(); ?>

   	<br>
	<a href="<?php echo base_url('index.php/Home/LoginLec'); ?>">Already have an account? Login now</a>
</div>


<?php include 'partials/footer.php'?>
