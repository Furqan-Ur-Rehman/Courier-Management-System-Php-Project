<?php
session_start();
    include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin') {
    if (isset($_POST['addbranch'])) {
        $BranchName = $_POST['BranchName'];
        $BranchContact = $_POST['BranchContact'];
        $Bremail = $_POST['Bremail'];
        $address = $_POST['address'];
        $city = $_POST['city']; 
        $zipCode =$_POST['zipCode'];
        $country = $_POST['country'];
        

        $InsertQuery = "insert into branch ( Br_name, Br_contact, Br_email, Br_address, Br_city, Br_pincode,country) 
                        values ('$BranchName','$BranchContact', '$Bremail', '$address', '$city','$zipCode' , '$country')";
    
                        $insert = mysqli_query($con, $InsertQuery);
                        if($insert){      
                        echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add Branch.php?added=1'</script>";
                        }
    } 


    if (isset($_POST['editbranch'])) {
        $Branch_id = $_POST['Branchid'];
        $BranchName = $_POST['BranchName'];
        $BranchContact = $_POST['BranchContact'];
        $Bremail = $_POST['Bremail'];
        $address = $_POST['address'];
        $city = $_POST['city']; 
        $zipCode =$_POST['zipCode'];
        @$country = $_POST['country'];
        

        $query = "update branch set Br_name='$BranchName', Br_contact='$BranchContact', Br_email='$Bremail', Br_address='$address', Br_city='$city',Br_pincode ='$zipCode', country='$country' where branch_id = '$Branch_id'";
                        $res = mysqli_query($con, $query) or die("Query Failed");
                        if ($res) {
                            echo "
                            <script>
                            alert('Data Updated Successfully!'); 
                            window.location.href='../Manage Branch.php?updated=1';
                            </script>";
                        }
                         else {
                            echo "<script> alert('Data Updation Failed');            
                            window.location.href='../Manage Branch.php';
                            </script>";
                        }
    
    } 


    // Delete Branch
  @$DelID = $_GET['delid'];
  $quer = "delete from branch where branch_id = '$DelID'";
  $res = mysqli_query($con, $quer);
  if ($res){
  echo "
  <script>
  alert('Data Deleted!!');window.location.href='../Manage Branch.php?deleted=1';
  </script>";
  }
  mysqli_close($con);
}
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../Admin.php'</script>";
}

?>