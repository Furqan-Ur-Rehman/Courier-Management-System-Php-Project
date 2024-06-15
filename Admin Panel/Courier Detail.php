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
$select = "Select * from courier_details where Tracking_id = $id";

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
             <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Courier /</span>View More Details</h4>

             <!-- Basic Bootstrap Table -->
             <div class="card">
               <h5 class="card-header">View Courier Details</h5>
               <div class="table-responsive text-nowrap">
                 <table class="table">
                   <thead>
                     <tr>
                       <th>SendAdd</th>
                       <th>SendCon.</th>
                       <th>Sendcity</th>
                       <th>Sendpin</th>
                       <th>SCountry</th>
                       <th>Rcont</th>
                       <th>RAdd</th>
                       <th>Rcity</th>
                       <th>Rpin</th>
                       <th>Rcount</th>
                     </tr>
                   </thead>
                   <tbody class="table-border-bottom-0">
                       <?php  while($getdata = mysqli_fetch_assoc($run)){
                           ?> 
                      <tr>
                     
                       <td><strong><?= $getdata['sender_address'] ?></strong></td>
                       <td><?= $getdata['sender_contact']?></td>
                       <td><?= $getdata['sender_city']?></td>
                       <td><?= $getdata['sender_pincode']?></td>
                       <td><?= $getdata['sender_country']?></td>
                       <td><?= $getdata['receiver_contact']?></td>
                       <td><strong><?= $getdata['receiver_address']?></strong></td>
                       <td><?= $getdata['receiver_city']?></td>
                       <td><?= $getdata['receiver_pincode']?></td>
                       <td><?= $getdata['receiver_country']?></td>
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

