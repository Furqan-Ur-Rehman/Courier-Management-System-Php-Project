<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Agent') {

  $select = "Select * from courier_details inner join package on courier_details.package_id=package.package_id
  inner join status on courier_details.status_id=status.status_id 
  inner join branch on courier_details.sender_branch=branch.branch_id";

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
                <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Courier /</span>Manage Couriers</h4>

                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">View Courier Details</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Package</th>
                          <th>Rs.on Cate</th>
                          <th>Days</th>
                          <th>Cour Desc</th>
                          <th>Weigh(Kg)</th>
                          <th>Status</th>
                          <th>Br.</th>
                          <th>SendName</th>
                          <th>RecName</th>
                          <th>DateofDel</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                          <?php  while($getdata = mysqli_fetch_assoc($run)){
                              ?> 
                        <tr>
                        
                          <td><strong><?= $getdata['package_cate'] ?></strong></td>
                          <td><?= $getdata['amount_cate']?></td>
                          <td><?= $getdata['Days']?></td>
                          <td><?= $getdata['courier_desc']?></td>
                          <td><?= $getdata['parcel_weight']?></td>
                          <td><?= $getdata['status_desc']?></td>
                          <td><?= $getdata['Br_name']?></td>
                          <td><?= $getdata['sender_name']?></td>
                          <td><?= $getdata['receiver_name']?></td>
                          <td><?= $getdata['date_of_delivery']?></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="Edit Courier.php?editid=<?= $getdata['Tracking_id'] ?>"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="Operations/Courier_crud.php?delid=<?= $getdata['Tracking_id']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                                <a class="dropdown-item" href="Courier Detail.php?id=<?= $getdata['Tracking_id'] ?>"
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
      <div class="alert alert-success" role="alert" id="updated" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
      Courier has been <b>Updated</b> Sucessfully!
      </div>
      
      <div class="alert alert-success" role="alert" id="deleted" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
      Courier has been <b>Deleted</b> Sucessfully!
      </div>
      
  <?php

    @
    $ID = $_GET['updated'];
    if ($ID) {
      echo "<script>
    document.getElementById('updated').style.display = 'block';

    const myTimeout = setTimeout(myGreeting, 5000);

    function myGreeting() {
      document.getElementById('updated').style.display = 'none';
      window.location.href='Manage Courier.php';

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
      window.location.href='Manage Courier.php';

    }
      </script>";
      }
} 
else if(@$_SESSION['DatabaseRole'] == 'Customer'){
  @$id = $_SESSION['Cust_id']; 
  $select = "Select * from courier_details inner join package on courier_details.package_id=package.package_id
  inner join status on courier_details.status_id=status.status_id 
  inner join branch on courier_details.sender_branch=branch.branch_id
  where userid = $id";

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
                <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Courier /</span>Manage Couriers</h4>

                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">View Courier Details</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Package</th>
                          <th>Rs.on Cate</th>
                          <th>Days</th>
                          <th>Cour Desc</th>
                          <th>Weigh(Kg)</th>
                          <th>Status</th>
                          <th>Br.</th>
                          <th>SendName</th>
                          <th>RecName</th>
                          <th>DateofDel</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                          <?php  while($getdata = mysqli_fetch_assoc($run)){
                              ?> 
                        <tr>
                        
                          <td><strong><?= $getdata['package_cate'] ?></strong></td>
                          <td><?= $getdata['amount_cate']?></td>
                          <td><?= $getdata['Days']?></td>
                          <td><?= $getdata['courier_desc']?></td>
                          <td><?= $getdata['parcel_weight']?></td>
                          <td><?= $getdata['status_desc']?></td>
                          <td><?= $getdata['Br_name']?></td>
                          <td><?= $getdata['sender_name']?></td>
                          <td><?= $getdata['receiver_name']?></td>
                          <td><?= $getdata['date_of_delivery']?></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="Edit Courier.php?editid=<?= $getdata['userid'] ?>"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="Operations/Courier_crud.php?delid=<?= $getdata['userid']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                                <a class="dropdown-item" href="Courier Detail.php?id=<?= $getdata['userid'] ?>"
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
      <div class="alert alert-success" role="alert" id="updated" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
      Courier has been <b>Updated</b> Sucessfully!
      </div>
      
      <div class="alert alert-success" role="alert" id="deleted" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
      Courier has been <b>Deleted</b> Sucessfully!
      </div>
      
  <?php

    @
    $ID = $_GET['updated'];
    if ($ID) {
      echo "<script>
    document.getElementById('updated').style.display = 'block';

    const myTimeout = setTimeout(myGreeting, 5000);

    function myGreeting() {
      document.getElementById('updated').style.display = 'none';
      window.location.href='Manage Courier.php';

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
      window.location.href='Manage Courier.php';

    }
      </script>";
      }
}
else {
      echo "<script>alert('Access Denied!')</script>";
      echo "<script>window.location.href = 'Admin.php'</script>";
  }
  
?>
  </body>
</html>
