<?php
session_start();
include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin') {
    if (isset($_POST['addpackage'])) {
        $packagecate = $_POST['packagecate'];
        $amountcate = $_POST['amountcate'];
        $days = $_POST['days'];

        $InsertQuery = "insert into package (package_cate,amount_cate,Days) 
        values ('$packagecate', '$amountcate','$days')";

                        $insert = mysqli_query($con, $InsertQuery);
                        if($insert){      
                        echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add Package.php?added=1'</script>";
                        }
    } 


    if (isset($_POST['editpackage'])) {
        $packageid = $_POST['package_id'];
        $packagecate = $_POST['packagecate'];
        $amountcate = $_POST['amountcate'];
        $days = $_POST['days'];

        $UpdateQuery = "Update package set package_cate = '$packagecate',amount_cate = '$amountcate',Days = '$days' where package_id = $packageid";

                        $update = mysqli_query($con, $UpdateQuery);
                        if($update){      
                        echo "<script>alert('Data has been Updated Successfully!');window.location.href = '../Manage Package.php?updated=1'</script>";
                        }
    } 


      // Delete Package
      @$DelID = $_GET['delid'];
      $quer = "delete from package where package_id = '$DelID'";
      $res = mysqli_query($con, $quer);
      if ($res){
      echo "
      <script>
      alert('Data Deleted!!');window.location.href='../Manage Package.php?deleted=1';
      </script>";
      }
      mysqli_close($con);

} 
else {
        echo "<script>alert('Access Denied!')</script>";
        echo "<script>window.location.href = '../Admin.php'</script>";
    }

?>