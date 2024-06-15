<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Agent') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}
$id = $_GET['editid'];
$select = "Select * from courier_details inner join package on courier_details.package_id=package.package_id
inner join status on courier_details.status_id=status.status_id 
inner join branch on courier_details.sender_branch=branch.branch_id where Tracking_id = $id";

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
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Add Courier /</span> New Courier</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-2">
                    <h5 class="card-header">Courier Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST"  action="Operations/Courier_crud.php">
                        <div class="row">
                        <input type="hidden" class="form-control" id="trackingid" value="<?= $getdata['Tracking_id'] ?>" name="trackingid" placeholder="Sender Name" />
                        <div class="mb-3 col-md-6">
                            <label for="userid" class="form-label">User ID</label>
                            <input
                              class="form-control"
                              type="text"
                              id="userid"
                              name="userid"
                              value="<?php $getdata['userid'] ?>"
                              placeholder="User Id"
                            />
                          </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="packagecate">Package Category</label>
                            <select id="packagecate" name="packagecate" autofocus class="select2 form-select">
                            <option value="<?php echo $getdata['package_id']?>"><?php echo $getdata['package_cate']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from package";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['package_id']?>"><?php echo $data['package_cate']?></option>
                              <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="amountcate">Rs. Cate</label>
                            <select id="amountcate" name="amountcate" class="select2 form-select">
                            <option value="<?php echo $getdata['amount_cate']?>"><?php echo $getdata['amount_cate']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from package";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['amount_cate']?>"><?php echo $data['amount_cate']?></option>
                              <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="days">Days</label>
                            <select id="days" name="days" class="select2 form-select">
                            <option value="<?php echo $getdata['Days']?>"><?php echo $getdata['Days']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from package";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['Days']?>"><?php echo $data['Days']?></option>
                              <?php endwhile; ?>
                            </select>
                        </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="courierdesc" class="form-label">Courier Desc</label>
                            <input
                              class="form-control"
                              type="text"
                              id="courierdesc"
                              name="courierdesc"
                              value="<?= $getdata['courier_desc'] ?>"
                              placeholder="Courier Description"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="parcelweight" class="form-label">Parcel Weight(Kg)</label>
                            <input
                              class="form-control"
                              type="number"
                              id="parcelweight"
                              name="parcelweight"
                              value="<?= $getdata['parcel_weight'] ?>"
                              placeholder="2 Kg"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="status">Status</label>
                            <select id="status" name="status" class="select2 form-select">
                            <option value="<?php echo $getdata['status_id']?>"><?php echo $getdata['status_desc']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from status";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['status_id']?>"><?php echo $data['status_desc']?></option>
                              <?php endwhile; ?>
                            </select>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="branch">Branch</label>
                            <select id="branch" name="branch" class="select2 form-select">
                            <option value="<?php echo $getdata['branch_id']?>"><?php echo $getdata['Br_name']?></option>
                              <?php 
                              include('../Operations/Connection.php');
                              $select = "select * from branch";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['branch_id']?>"><?php echo $data['Br_name']?></option>
                              <?php endwhile; ?>
                            </select>
                          </div>
                          <h5 class="card-header">Sender Details</h5>
                          <hr class="" />
                          <div class="mt-6 col-md-6">
                            <label for="sendname" class="form-label">Sender Name</label>
                            <input type="text" class="form-control" id="sendname" value="<?= $getdata['sender_name'] ?>" name="sendname" placeholder="Sender Name" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="sendaddress" class="form-label">Send. Add</label>
                            <input class="form-control" type="text" id="sendaddress" value="<?= $getdata['sender_address'] ?>" name="sendaddress" placeholder="Sender Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="sendcont" class="form-label">Send. Contact</label>
                            <input
                              type="text"
                              class="form-control"
                              id="sendcont"
                              name="sendcont"
                              value="<?= $getdata['sender_contact'] ?>"
                              placeholder="0300-2500011"
                              maxlength="12"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="sendcity" class="form-label">Send. City</label>
                            <input class="form-control" type="text" value="<?= $getdata['sender_city'] ?>" id="sendcity" name="sendcity" placeholder="Sender City" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="sendpin" class="form-label">Send. Pincode</label>
                            <input class="form-control" type="number" value="<?= $getdata['sender_pincode'] ?>" id="sendpin" name="sendpin" placeholder="Sender Pincode" />
                          </div>
                          <div class="col-md-6">
                            <label for="sendcountry" class="form-label">Send. Country</label>
                            <input class="form-control" type="text" value="<?= $getdata['sender_country'] ?>" id="sendcountry" name="sendcountry" placeholder="Sender Country" />
                          </div>
                          <h5 class="card-header">Receiver Details</h5>
                          <hr class=""  style="font-weight:bold;"/>
                          <div class="mt-6 col-md-6">
                            <label for="recname" class="form-label">Rec. Name</label>
                            <input class="form-control" type="text" value="<?= $getdata['receiver_name'] ?>" id="recname" name="recname" placeholder="Receiver Name" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="reccont" class="form-label">Rec. Cont</label>
                            <input class="form-control" type="number" value="<?= $getdata['receiver_contact'] ?>" maxlength="12" id="reccont" name="reccont" placeholder="Receiver Contact" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="recadd" class="form-label">Rec. Add</label>
                            <input class="form-control" type="text" value="<?= $getdata['receiver_address'] ?>" id="recadd" name="recadd" placeholder="Receiver Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="reccity" class="form-label">Rec. City</label>
                            <input class="form-control" type="text" value="<?= $getdata['receiver_city'] ?>" id="reccity" name="reccity" placeholder="Receiver City" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="recpin" class="form-label">Rec. Pin</label>
                            <input class="form-control" type="number" value="<?= $getdata['receiver_pincode'] ?>" id="recpin" name="recpin" placeholder="Receiver Pincode" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="reccountry" class="form-label">Rec. Country</label>
                            <input class="form-control" type="text" value="<?= $getdata['receiver_country'] ?>" id="reccountry" name="reccountry" placeholder="Receiver Country" />
                          </div>
                          
                          <div class="mb-3 col-md-12">
                            <label for="dateofdel" class="form-label">Date of Delivery</label>
                            <input class="form-control" type="datetime-local" value="<?= $getdata['date_of_delivery'] ?>" id="dateofdel" name="dateofdel" placeholder="Date of Delivery" />
                          </div>
                        <div class="mt-2">
                          <button type="submit" name="editcourier" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    <!-- / Layout wrapper -->

    <!-- / Show Message -->
   
    <div class="alert alert-success" role="alert" id="added" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
    New Courier has been <b>Added</b> Sucessfully!
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
  window.location.href='Add courier.php';

}
  </script>";
  }
  
?>
    
  </body>
</html>
