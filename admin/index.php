<?php include('include/header.php'); ?>

<?= alertMessage(); ?>

<h4>EasyPark</h4>

<div class="row">
  
  <?php
  //total vehicles
  $query=mysqli_query($conn,"select ID from tblvehicle");
  $count_total_vehentries=mysqli_num_rows($query);
  ?>
<div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Vehicles</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo $count_total_vehentries?>
                    </h5>
            </div>
          </div>

          <?php
//total Registered Users
         $query2=mysqli_query($conn,"select id from users");
         $regdusers=mysqli_num_rows($query2);
?>
        <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Registered Users</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo $regdusers;?>
                    </h5>
            </div>
          </div>

          <?php
//total Registered Users
         $query3=mysqli_query($conn,"select ID from tblcategory");
         $listedcat=mysqli_num_rows($query3);
 ?>
          <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Listed Categories</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php echo $listedcat;?>
                    </h5>
            </div>
          </div>
</div>

<?php include('include/footer.php'); ?>