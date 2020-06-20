<?php include 'includes/header.php';

if ($this->session->flashdata('welocme')){

    echo "<h3>".$this->session->flashdata('welocme')."</h3>";

        }
        ?>

<html>
<div class= "container">
<h1>Your Answers submitted successfully.., Results will be online soon</h2>

<br>
<a href="<?php echo base_url('index.php/Admin/level1'); ?>" style="text-decoration:none;" ><button class="btn btn-info btn-lg">Back to Modules</button></a>

</div>
		

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'includes/footer.php'; ?>
</html>