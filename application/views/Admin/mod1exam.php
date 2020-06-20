<?php include 'includes/header.php'?>


<div class="container">

    <h2>Module Examination</h2>

    <?php if ($this->session->flashdata('msg')){

        echo "<h3>".$this->session->flashdata('msg')."</h3>";

    }

    ?>

    <hr>
	
    <font color="#ff0000"><?php echo validation_errors(); ?></font>
    <?php echo form_open('Admin/modexam'); ?>


		
	
		
        <div class="form-group">
			<select name="question1">
			<option value="Explain Golden rule of information">Explain Golden rule of information</option>
			</select>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type your answer" name="ans1">
        </div>		
        <div class="form-group">
			<select name="question2">
			<option value="Explain Normalization">Explain Normalization</option>
			</select>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type your answer" name="ans2">
        </div>		
        <div class="form-group">
			<select name="question3">
			<option value="What is Cryptography">What is Cryptography?</option>
			</select>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type your answer" name="ans3">
        </div>		
        <div class="form-group">
			<select name="question4">
			<option value="Explain File Transfer Protocol">Explain File Transfer Protocol</option>
			</select>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type your answer" name="ans4">
        </div>		
        <div class="form-group">
			<select name="question5">
			<option value="Compare Real time processing and Batch processing">Compare Real time processing and Batch processing</option>
			</select>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type your answer" name="ans5">
        </div>

		
        <button type="submit" class="btn btn-default">Submit</button>
   <?php echo form_close(); ?>
   

</div>


<?php include 'includes/footer.php'?>
