<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}
$id = $_GET['editid'];
$select = "Select * from package where package_id = $id";

$run = mysqli_query($con, $select);
$getdata = mysqli_fetch_assoc($run);
?>

  <body>
    <!-- Layout wrapper -->
    
      <div class="layout-container">
       

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Edit Package /</span> Update Packages</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-2">
                    <h5 class="card-header">Package Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="Operations/Package_crud.php">
                        <div class="row">
                        
                            <input
                              class="form-control"
                              type="hidden"
                              id="package_id"
                              name="package_id"
                              value="<?= $getdata['package_id'] ?>"
                              autofocus
                            />
                          
                          <div class="mb-3 col-md-12">
                            <label for="packagecate" class="form-label">Package Cate</label>
                            <input
                              class="form-control"
                              type="text"
                              id="packagecate"
                              name="packagecate"
                              value="<?= $getdata['package_cate'] ?>"
                              autofocus
                            />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="amountcate" class="form-label">Package Amount</label>
                            <input
                              class="form-control"
                              type="text"
                              id="amountcate"
                              name="amountcate"
                              value="<?= $getdata['amount_cate'] ?>"
                              autofocus
                            />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="days" class="form-label">Days</label>
                            <input
                              class="form-control"
                              type="text"
                              id="days"
                              name="days"
                              value="<?= $getdata['Days'] ?>"
                              autofocus
                            />
                          </div>
                        </div>
                        <div class="mt-2">
                          <input type="submit" class="btn btn-primary me-2" name="editpackage" value="Update changes">
                          <input type="reset" class="btn btn-outline-secondary" name="cancel" value="Cancel">
                        </div>
                      </form>
                    </div>
                    <!-- /Branch -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    <!-- / Layout wrapper -->

    <!-- / Show Message -->
    <div class="alert alert-success" role="alert" id="deleted" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
    Branch has been <b>Deleted</b> Sucessfully!
    </div>
    
    <div class="alert alert-success" role="alert" id="added" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
    New Branch has been <b>Added</b> Sucessfully!
    </div>
<?php

@
$ID = $_GET['added'];
if ($ID) {
  echo "<script>
document.getElementById('added').style.display = 'block';

const myTimeout = setTimeout(myGreeting, 5000);

function myGreeting() {
  document.getElementById('added').style.display = 'none';
  window.location.href='Add Branch.php';

}
  </script>";
  }
  @
  $ID = $_GET['deleted'];
  if ($ID) {
    echo "<script>
  document.getElementById('deleted').style.display = 'block';

  const myTimeout = setTimeout(myGreeting, 5000);

  function myGreeting() {
    document.getElementById('deleted').style.display = 'none';
    window.location.href='Add Branch.php';

  }
    </script>";
    }


?>
  </body>
</html>
