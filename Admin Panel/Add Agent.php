<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}

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
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Add Agent /</span> New Agent</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-2">
                    <h5 class="card-header">Agent Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="Operations/Agent_crud.php">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="agentname" class="form-label">Agent Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="agentname"
                              name="agentname"
                              value=""
                              placeholder="Name of Agent"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="agentemail" class="form-label">Agent Email</label>
                            <input class="form-control" type="email" name="agentemail" id="agentemail" value="Agent Email" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" id="" class="form-label">Password</label>
                            <input
                              class="form-control"
                              type="password"
                              id="regpassword"
                              name="password"
                              value=""
                              placeholder="****"
                              maxlength="8"
                            />
                            <input type="checkbox" style="cursor:pointer;" onclick="showregpass()"> Show Password
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="number" class="form-control" maxlength="11" id="contact" name="contact" placeholder="Contact" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="dateofreg" class="form-label">Date of Registration</label>
                            <input
                              type="datetime-local"
                              class="form-control"
                              id="dateofreg"
                              name="dateofreg"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="branch" class="form-label">Branch</label>
                            <input type="text" class="form-control" id="branch" name="branch" placeholder="Name of Branch" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role" name="role" readonly value="Agent" />
                          </div>
                        </div>
                        <div class="mt-2">
                          <input type="submit" class="btn btn-primary me-2" name="addagent" value="Save changes">
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
    New Agent has been <b>Added</b> Sucessfully!
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
  window.location.href='Add Agent.php';

}
  </script>";
  }
?>
<script>
  // Registration
  function showregpass(){
            var regpass = document.getElementById('regpassword');
            if(regpass.type === "password"){
                regpass.type = "text";
            }
            else{
                regpass.type = "password";
            }
        }
</script>
  </body>
</html>
