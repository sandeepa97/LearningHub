<?php include 'includes/header.php';

if ($this->session->flashdata('welocme')){

    echo "<h3>".$this->session->flashdata('welocme')."</h3>";

        }
        ?>


<style>
.container {
  position: relative;
  width: 40%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
._link{
	color:#ffffff;
}
._link:hover{
	color:#ffea00;
}

</style>

<br>
		<div class="container">
		  <img src="<?php echo base_url(); ?>assets/images/course011.jpg" alt="Avatar" class="image" width="500px">
		  <div class="overlay">
			<div class="text" ><a href="<?php echo base_url('index.php/Admin/level1'); ?>" style="text-decoration:none;" class="_link">Enroll for Certificate in IT</a></div>
		  </div>
		</div>
<br>
		<div class="container">
		  <img src="<?php echo base_url(); ?>assets/images/course012.jpg" alt="Avatar" class="image">
		  <div class="overlay">
			<div class="text"><a href="<?php echo base_url('index.php/Admin/level2'); ?>" style="text-decoration:none;" class="_link">Enroll for Diploma in IT</a></div>
		  </div>
		</div>
<br>
		<div class="container">
		  <img src="<?php echo base_url(); ?>assets/images/course013.jpg" alt="Avatar" class="image">
		  <div class="overlay">
			<div class="text"><a href="<?php echo base_url('index.php/Admin/level3'); ?>" style="text-decoration:none;" class="_link">Enroll for PGD in IT</a></div>
		  </div>
		</div>

			


<?php include 'includes/footer.php'; ?>