<?php 
include('Operations/Connection.php');
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}

    @$userid = $_GET['id'];
    $select = "Select * from insert_contact where User_Id = '$userid'";
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
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Reply Message /</span> Message's Reply</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-2">
                    <h5 class="card-header">Reply Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="../contact crud.php">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="userid" class="form-label">User ID</label>
                            <input
                              class="form-control"
                              type="text"
                              id="userid"
                              name="userid"
                              value="<?= $getdata['User_Id'] ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="username" class="form-label">User Name</label>
                            <input class="form-control" type="text" name="username" readonly id="username" value="<?= $getdata['User_Name'] ?>" />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="useremail" class="form-label">User E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="useremail"
                              name="useremail"
                              value="<?= $getdata['User_Email'] ?>"
                              readonly
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="address" class="form-label"><strong>Reply to : Mr.<u><?= $getdata['User_Name'] ?></u></strong></label>
                            <textarea name="usermessage" id="" cols="101" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="mt-2">
                          <input type="submit" class="btn btn-primary me-2" name="replymessage" value="Submit Reply">
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
    <div class="alert alert-success" role="alert" id="added" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
    Contact has been <b>Added</b> Sucessfully!
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
  window.location.href='Add Contact.php';

}
  </script>";
  }
  
?>
  </body>
</html>
