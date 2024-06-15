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
$select = "Select * from branch where branch_id = $id";

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
             <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Branch /</span>View More Details</h4>

             <!-- Basic Bootstrap Table -->
             <div class="card">
               <h5 class="card-header">View Branch Details</h5>
               <div class="table-responsive text-nowrap">
                 <table class="table">
                   <thead>
                     <tr>
                       <th>Branch Name</th>
                       <!-- <th>Contact</th> -->
                       <th>Email</th>
                       <th>Address</th>
                       <th>City</th>
                       <th>Pincode</th>
                       <!-- <th>Country</th>
                       <th>Actions</th> -->
                     </tr>
                   </thead>
                   <tbody class="table-border-bottom-0">
                       <?php  while($getdata = mysqli_fetch_assoc($run)){
                           ?> 
                      <tr>
                     
                       <td><strong><?= $getdata['Br_name'] ?></strong></td>
                       <!-- <td><?= $getdata['Br_contact']?></td> -->
                       <td><?= $getdata['Br_email']?></td>
                       <td><?= $getdata['Br_address']?></td>
                       <td><?= $getdata['Br_city']?></td>
                       <td><?= $getdata['Br_pincode']?></td>
                       <!-- <td><?= $getdata['country']?></td> -->
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
</body>

