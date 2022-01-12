<!--maintenance by- NUR AYUNI BADURI BINTI MUHAMMAD -CB19087-->

<?php
require_once '../../BusinessServiceLayer/Controller/medicineController.php';
require_once '../../BusinessServiceLayer/controller/cartController.php';
session_start();

$medicine_id = $_GET['medicine_id'];
$medicine = new medicineController();
$cart = new cartController();
$data = $medicine->viewMedicine($medicine_id); 
$name = $_GET['medicine_id'];

  if (!isset($_SESSION['username'])) {
    $message = "You must log in first";
        header('refresh:5; url=../../ApplicationLayer/ManageLoginI/login.php');
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../view';</script>";
  }

  if (isset($_POST ['buy'])) {
    $cart->add();
  }
    if (isset($_POST ['delete'])) {
    $medicine->delete();
  }


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RMS</title>
<?php include"../../includes/head.php";?>
</head>


<body>


  <div class="wrapper" id="wrapper">
    <?php 
    include "../../includes/header.php";
    ?>
	
    <div class="ht__bradcaump__wrap d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
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
        <h2 class="title">View Medicine</h2>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <?php
          foreach($data as $row){
            ?>
            <center><img src="../../img/<?php echo $row['medicine_image'];?>" height="130" width="150"></center>
            <center>
            <div class='form-row'>
              <div class='name'>Name: </div>
              <div class='value'>
                <div class='input-group'>
                  <?=$row['medicine_name']?>
                </div>
              </div>
              </div>
              <div class='form-row'>
              <div class='name'>Details: </div>
              <div class='value'>
                <div class='input-group'>
                  <?=$row['medicine_details']?>
                </div>
              </div>
              </div>
              <div class='form-row'>
              <div class='name'>Price: </div>
              <div class='value'>
                <div class='input-group'>
                  <?=$row['medicine_price']?>
                </div>
              </div>
              </div>
              <div class='form-row'>
              <div class='name'>Quantity: </div>
              <div class='value'>
                <div class='input-group'>
                  <?=$row['medicine_quantity']?>
                </div>
              </div>
              </div>
              <div>
              </center>
                <center>
            <?php
                  if ($_SESSION['usertype'] == 1) {
                    ?>
                 
                    <input type="hidden" name="name" value="<?=$row['medicine_name']?>">
                    <input type="hidden" name="price" value="<?=$row['medicine_price']?>">
                    <input type="hidden" name="image" value="<?=$row['medicine_image']?>">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="total" value="<?=$row['medicine_price']?>">
                    <button class="med-btn" type="submit" name="buy" value="Add to Cart"> Add to Cart </button>
                    <?php
                  } elseif ($_SESSION['usertype'] == 2){ ?><br>
                    <button class="med-btn"> <a href="edit.php?medicine_id=<?=$row['medicine_id']?>">Edit</a></button>
                    <input type="hidden" name="medicine_id" value="<?=$row['medicine_id']?>">
                    <button class="med-btn" type="submit" name="delete" value="Delete"> Delete </button>
                    <br><br>
                    
                    <button class="med-btn"><a href="medicineList.php">Back</a></button> <br><br><br>
                    <?php
                  }?>
                </center>
              </div>
              </form>
            <?php } ?>
</section></div>

<!--FOOTER-->
<div class="footer">
	<div class="foot">
	<p>All Right Reserved Marverick &#8482;</p>
	</div>
</div>




</body>
</html>
