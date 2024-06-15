<?php 
include('Layout/header.php');
include('Layout/sidebar.php');
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Agent') {
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = 'Admin.php'</script>";
}
$id = $_GET['id'];
$select = "Select * from insert_contact where User_Id = $id";

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
             <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Messages /</span>View More Details</h4>

             <!-- Basic Bootstrap Table -->
             <div class="card">
               <h5 class="card-header">View Message Details</h5>
               <div class="table-responsive text-nowrap">
                 <table class="table">
                   <thead>
                    <tr>
                        <th>Messages</th>
                     </tr>
                   </thead>
                   <tbody class="table-border-bottom-0">
                       <?php  while($getdata = mysqli_fetch_assoc($run)){
                           ?> 
                      <tr>
                        <td><strong>From: <?= $getdata['User_Email'] ?></strong></td>
                      </tr>

                       <tr>
                            <td><textarea name="" id="" cols="101" readonly rows="10"><?= $getdata['User_message'] ?></textarea></td>
                       </tr>
                      
                       <tr><td><strong>Reply from: Admin (View Reply Details below, if reply has been made.)</strong></td>
                    
                        </tr>
                       <tr>
                            <td><textarea name="" id="" cols="101" readonly rows="10"><?= $getdata['Reply'] ?></textarea></td>
                       </tr>
                   </tbody>
                 </table>
                 <div class="card-body">
                    <div class="mt-0">
                        <?php if(@$_SESSION['DatabaseRole'] == 'Admin'){ ?>
                        <a href="Add Contact.php?id=<?= $getdata['User_Id'] ?>">
                            <button class="btn btn-primary me-2">Reply</button>
                        </a>
                      <?php } ?>
                        <!-- <form id="formAccountSettings" method="POST" action="">
                            <input type="hidden" name="contactid" value="">
                            <input type="submit" class="btn btn-primary me-2" name="addreply" value="Reply">
                        </form> -->
                    </div>
                    <?php }?>
                </div>
               </div>
             </div>
             
           </div>
           <!-- / Content -->

         <!-- Content wrapper -->
       </div>
       <!-- / Layout page -->
     </div>

   <!-- / Layout wrapper -->
</body>

