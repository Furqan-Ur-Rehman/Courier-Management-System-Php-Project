<?php
session_start();
include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  
    if (isset($_POST['addstatus'])) {
      $statusdesc = $_POST['statusdesc'];
      
      $InsertQuery = "insert into status (status_desc) 
      values ('$statusdesc')";

                      $insert = mysqli_query($con, $InsertQuery);
                      if($insert){      
                      echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add Status.php?added=1'</script>";
                      }
    } 


    if (isset($_POST['editstatus'])) {
        $status_id = $_POST['status_id'];
        $statusdesc = $_POST['statusdesc'];

        $UpdateQuery = "Update status set status_desc = '$statusdesc' where status_id = $status_id";

                        $update = mysqli_query($con, $UpdateQuery);
                        if($update){      
                        echo "<script>alert('Data has been Updated Successfully!');window.location.href = '../Manage Status.php?updated=1'</script>";
                        }
    } 
  
  
  
  
  
  
  // Delete Status
  @$DelID = $_GET['delid'];
  $quer = "delete from status where status_id = '$DelID'";
  $res = mysqli_query($con, $quer);
  if ($res){
  echo "
  <script>
  alert('Data Deleted!!');window.location.href='../Manage Status.php?deleted=1';
  </script>";
  }
  mysqli_close($con);
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../Admin.php'</script>";
}




  

?>