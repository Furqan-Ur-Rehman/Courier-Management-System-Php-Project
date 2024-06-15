<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Agent') {
  
  $select = "Select * from user where Role = 'Agent'";
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
            <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Agent /</span>Manage Agents</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">View Details</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>UserName</th>
                      <th>email</th>
                      <th>password</th>
                      <th>contact</th>
                      <th>DateofReg</th>
                      <th>Role</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      <?php  while($getdata = mysqli_fetch_assoc($run)){
                          ?> 
                     <tr>
                    
                      <td><strong><?= $getdata['UserName'] ?></strong></td>
                      <td><?= $getdata['email']?></td>
                      <td><?= $getdata['password']?></td>
                      <td><?= $getdata['contact']?></td>
                      <td><?= $getdata['Date_of_Registration']?></td>
                      <td><?= $getdata['Role']?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="Edit Agent.php?editid=<?= $getdata['id'] ?>"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="Operations/Agent_crud.php?delid=<?= $getdata['id']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                            <a class="dropdown-item" href="Agent Detail.php?id=<?= $getdata['id'] ?>"
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
  Agent has been <b>Deleted</b> Sucessfully!
  </div>
  
  <div class="alert alert-success" role="alert" id="updated" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
  Agent has been <b>Updated</b> Sucessfully!
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
    window.location.href='Manage Agent.php';

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
    window.location.href='Manage Agent.php';

  }
    </script>";
    }


  ?>
  </body>
  </html> <?php
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}


?>

 
