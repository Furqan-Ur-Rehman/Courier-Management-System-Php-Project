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
$select = "Select * from branch inner join branch_country on branch.country=branch_country.country_id where branch_id = $id";

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
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Edit Branch /</span> Update Branches</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-2">
                    <h5 class="card-header">Branch Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="Operations/Branch_crud.php">
                        <div class="row">
                        
                            <input
                              class="form-control"
                              type="hidden"
                              id="Branchid"
                              name="Branchid"
                              value="<?= $getdata['branch_id'] ?>"
                              autofocus
                            />
                          
                          <div class="mb-3 col-md-6">
                            <label for="BranchName" class="form-label">Branch Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="BranchName"
                              name="BranchName"
                              value="<?= $getdata['Br_name'] ?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="BranchContact" class="form-label">Branch Contact No.</label>
                            <input class="form-control" type="text" name="BranchContact" id="lastName" value="<?= $getdata['Br_contact']?>" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="Bremail" class="form-label">Branch E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="Bremail"
                              value="<?= $getdata['Br_email']?>"
                              placeholder="Branch.@example.com"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" value="<?= $getdata['Br_address']?>" class="form-control" id="address" name="address" placeholder="Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" value="<?= $getdata['Br_city']?>" class="form-control" id="city" name="city" placeholder="City" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="231465"
                              value="<?= $getdata['Br_pincode']?>"
                              maxlength="6"
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" name="country" class="select2 form-select">
                              <!-- <option value="">Select</option> -->
                              <option value="<?= $getdata['country_id'] ?>"><?= $getdata['Branch_country']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from branch_country";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['country_id']?>"><?php echo $data['Branch_country']?></option>
                              <?php endwhile; ?>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <input type="submit" class="btn btn-primary me-2" name="editbranch" value="Update changes">
                          <input type="reset" class="btn btn-outline-secondary" name="cancel" value="Cancel">
                        </div>
                      </form>
                    </div>
                    <!-- /Branch -->
                  </div>
                  <!-- <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div> -->
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
