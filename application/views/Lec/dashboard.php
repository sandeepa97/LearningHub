<?php include 'includes/header.php';

if ($this->session->flashdata('welocme')){

    echo "<h3>".$this->session->flashdata('welocme')."</h3>";

        }
        ?>

<center><h2>Lecturer Interface</h2></center>


<?php include 'includes/footer.php'; ?>