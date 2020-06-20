<?php include 'includes/header.php';

if ($this->session->flashdata('welocme')){

    echo "<h3>".$this->session->flashdata('welocme')."</h3>";

        }
        ?>

<html>
<h1>Level 1 _ Lesson 2</h2>		


<div="container-fluid">

	<div class="col-lg-6">
	<video width="720" height="480" controls  >
       <source src="<?php echo base_url();?>assets\videos\Llesson1.mp4" type="video/mp4">
       <source src="<?php echo base_url();?>assets\videos\Llesson1.ogg" type="video/ogg">
       Your browser does not support the video tag.
    </video>
	<br>
	
	<label>Rate this video lesson</label>
	<select id="rate">
  <option value="Bad">Bad</option>
  <option value="Average" selected>Average</option>
  <option value="Best">Best</option>
	</select>

	
	</div>
<div class="col-lg-6">
  <div class="panel-group" style="width:500px; padding-left:100px; padding-top:35px;">
    <div class="panel panel-primary">
      <div class="panel-heading">Objective</div>
      <div class="panel-body">Introduction to Database Models</div>
      <div class="panel-heading">Presenter</div>
	  <div class="panel-body">Dinesh Kosgi</div>
      <div class="panel-heading">Duration</div>
	  <div class="panel-body">7.02</div>
    </div>
	<br>
	<a href="<?php echo base_url('index.php/Admin/Llesson1Quiz'); ?>" style="text-decoration:none;" ><button type="button" class="btn btn-warning">Lesson Quizes</button></a>
  </div>
  
  
</div>


</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'includes/footer.php'; ?>
</html>