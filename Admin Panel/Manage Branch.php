<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Agent') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}
$select = "Select * from branch inner join branch_country on branch.country=branch_country.country_id";

$run = mysqli_query($con, $select);

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
              <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Branch /</span>Manage Branches</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">View Branches</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Branch Name</th>
                        <th>Contact</th>
                        <!-- <th>Email</th>
                        <th>Address</th> -->
                        <th>City</th>
                        <th>Pincode</th>
                        <th>Country</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php  while($getdata = mysqli_fetch_assoc($run)){
                            ?> 
                       <tr>
                      
                        <td><strong><?= $getdata['Br_name'] ?></strong></td>
                        <td><?= $getdata['Br_contact']?></td>
                        <!-- <td><?= $getdata['Br_email']?></td>
                        <td><?= $getdata['Br_address']?></td> -->
                        <td><?= $getdata['Br_city']?></td>
                        <td><?= $getdata['Br_pincode']?></td>
                        <td><?= $getdata['Branch_country']?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="Edit Branch.php?editid=<?= $getdata['branch_id'] ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="Operations/Branch_crud.php?delid=<?= $getdata['branch_id']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                              <a class="dropdown-item" href="Branch Detail.php?id=<?= $getdata['branch_id'] ?>"
                                ><i class="bx bx-view me-1"></i>More</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php }?> 
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
            <!-- / Content -->

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

    <div class="alert alert-success" role="alert" id="updated" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
    New Branch has been <b>Updated</b> Sucessfully!
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
  $ID = $_GET['updated'];
  if ($ID) {
    echo "<script>
  document.getElementById('updated').style.display = 'block';

  const myTimeout = setTimeout(myGreeting, 5000);

  function myGreeting() {
    document.getElementById('updated').style.display = 'none';
    window.location.href='Manage Branch.php';

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
    window.location.href='Manage Branch.php';

  }
    </script>";
    }

  
?>
  </body>
</html>
