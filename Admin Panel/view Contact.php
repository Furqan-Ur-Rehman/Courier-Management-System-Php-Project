<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Agent') {
  @$id =  $_SESSION['Cust_id'];
  $select = "Select * from insert_contact 
  inner join user on insert_contact.uid = user.id where uid = $id";
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
            <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Query /</span>Message Details</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">Message Details</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>UserName</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      <?php  while($getdata = mysqli_fetch_assoc($run)){
                          ?> 
                     <tr>
                    
                      <td><strong><?= $getdata['User_Id'] ?></strong></td>
                      <td><?= $getdata['User_Name']?></td>
                      <td><?= $getdata['User_Email']?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="Contact Details.php?id=<?= $getdata['User_Id'] ?>"
                              ><i class="bx bx-view me-1"></i>See Messages</a
                            >
                            <a class="dropdown-item" href="../contact crud.php?delid=<?= $getdata['User_Id']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                              ><i class="bx bx-trash me-1"></i> Delete</a
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

  <div class="alert alert-success" role="alert" id="added" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
  Messages has been <b>Added</b> Sucessfully!
  </div>

  <div class="alert alert-success" role="alert" id="deleted" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
  Messages has been <b>Deleted</b> Sucessfully!
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
    window.location.href='view Contact.php';

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
    window.location.href='view Contact.php';

  }
    </script>";
    }


  ?>
  </body>
  </html> <?php
}
else if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from insert_contact";
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
            <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Query /</span>Message Details</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">Message Details</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>UserName</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                      <?php  while($getdata = mysqli_fetch_assoc($run)){
                          ?> 
                     <tr>
                    
                      <td><strong><?= $getdata['User_Id'] ?></strong></td>
                      <td><?= $getdata['User_Name']?></td>
                      <td><?= $getdata['User_Email']?></td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="Contact Details.php?id=<?= $getdata['User_Id'] ?>"
                              ><i class="bx bx-view me-1"></i>See Messages</a
                            >
                            <a class="dropdown-item" href="../contact crud.php?delid=<?= $getdata['User_Id']?>" onclick="return confirm('Are you Sure you want to delete?'); return false;"
                              ><i class="bx bx-trash me-1"></i> Delete</a
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

  <div class="alert alert-success" role="alert" id="added" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
  Messages has been <b>Added</b> Sucessfully!
  </div>

  <div class="alert alert-success" role="alert" id="deleted" style="position:fixed; bottom:0px; right: 20px; display: none; box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.126);">
  Messages has been <b>Deleted</b> Sucessfully!
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
    window.location.href='view Contact.php';

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
    window.location.href='view Contact.php';

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
