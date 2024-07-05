<?php 
include('include/header.php'); 
include ('../config/function.php');
include('../admin/authentication.php');
alertMessage(); 

if (!isset($_SESSION['user_id'])) {
 // header("Location:logout.php");
  exit();
}

?>

<h4></h4>

<div class="row">
<div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Vehicle Parked</p>
                    <h5 class="font-weight-bolder mb-0">
                      2
                    </h5>
            </div>
          </div>

        <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Vehicle Checkout</p>
                    <h5 class="font-weight-bolder mb-0">
                      5
                    </h5>
            </div>
          </div>

          <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Remaining slots</p>
                    <h5 class="font-weight-bolder mb-0">
                      20
                    </h5>
            </div>
          </div>
</div>

<?php include('include/footer.php'); ?>