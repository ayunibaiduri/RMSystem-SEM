<?php
require_once '../../BusinessServiceLayer/Controller/medicineController.php';
session_start();

$medicine = new medicineController();

if(isset($_POST['add'])){
  $medicine->add();
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include"../../includes/head.php";?>
<style>
input {
  border-style: solid;
  border-color: grey;
}
</style>
<body>


  <div class="wrapper" id="wrapper">
    <?php 
    include "../../includes/header.php";
    ?>

    <div class="ht__bradcaump__wrap d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="bradcaump__inner text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style> 
  .medback{
  background-image: url('../../img/medhome.png');
  background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
<div class="medback">
  
  <section class="type__category__area bg--white section-padding">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">Add Medicine</h2>
        </div>
        <div class="card-body">
          <form action="" method="POST">
		  
        <div class='form-row'><br>
              <div class='name'>ID: </div>
              <center><div class='value'>
                <div class='input-group'>
                  <input type="text" name="details" class="input--style-5" required>
                </div>
              </div></center>

        <div class='form-row'><br>
              <div class='name'>Name: </div>
              <center> <div class='value'>
                <div class='input-group'>
                  <input type="text" name="name" class="input--style-5" required>
                </div>
              </div>
            </div></center>

        <div class='form-row'><br>
              <div class='name'>Details: </div>
              <center><div class='value'>
                <div class='input-group'>
                  <input type="text" name="details" class="input--style-5" required>
                </div>
              </div>
            </div></center>

        <div class='form-row'><br>
              <div class='name'>Quantity: </div>
              <center><div class='value'>
                <div class='input-group'>
                  <input type="text" name="quantity" class="input--style-5" required>
                </div>
              </div>
            </div></center>

        <div class='form-row'><br>
              <div class='name'>Price: </div>
              <center><div class='value'>
                <div class='input-group'>
                  <input type="text" name="price" class="input--style-5" required>
                </div>
              </div>
            </div></center>

        <div class='form-row'><br>
              <div class='name'>Image: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="file" name="image" class="input--style-5" required>
                </div>
              </div>
            </div>
        <div>
              <br><center>
                <button class="med-btn" type="submit" name="add" value="ADD"> Add</button>
                <button class="med-btn" type="submit" name="reset" value="RESET"> Reset</button>
                <br><br><br>

            <!--add navigation button that can give users better access on the system-->
            <button class ="med-btn"><a href="medicalHome.php">Back</a></button><br><br>

            </center>
            </div>
          </form>
      </center>
    </section>
</div>

<!--FOOTER-->
<div class="footer">
	<div class="foot">
	<p>All Right Reserved Marverick &#8482;</p>
	</div>
</div>



</body>
</html>
