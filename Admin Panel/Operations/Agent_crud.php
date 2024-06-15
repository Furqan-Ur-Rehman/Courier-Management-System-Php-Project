<?php
    session_start();
    include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin') {

    if (isset($_POST['addagent'])) {
        $agentname = $_POST['agentname'];
        $agentemail = $_POST['agentemail'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $address = $_POST['address']; 
        $dateofreg =$_POST['dateofreg'];
        $branch = $_POST['branch'];
        $role = $_POST['role'];
        

        $InsertQuery = "insert into user ( UserName, email, password, contact, Address, Date_of_Registration,Branch,Role) 
                        values ('$agentname','$agentemail', '$password', '$contact', '$address','$dateofreg' ,'$branch' ,'$role')";
    
                        $insert = mysqli_query($con, $InsertQuery);
                        if($insert){      
                        echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add Agent.php?added=1'</script>";
                        }
    } 


    if (isset($_POST['editagent'])) {
        $agentid = $_POST['id'];
        $agentname = $_POST['agentname'];
        $agentemail = $_POST['agentemail'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $address = $_POST['address']; 
        $dateofreg =$_POST['dateofreg'];
        $branch = $_POST['branch'];
        $role = $_POST['role'];
        

        $query = "update user set UserName='$agentname', email='$agentemail', password='$password', contact='$contact', Address='$address',Date_of_Registration ='$dateofreg', Branch='$branch',Role='$role'  where id = '$agentid'";
                        $res = mysqli_query($con, $query) or die("Query Failed");
                        if ($res) {
                            echo "
                            <script>
                            alert('Data Updated Successfully!'); 
                            window.location.href='../Manage Agent.php?updated=1';
                            </script>";
                        }
                         else {
                            echo "<script> alert('Data Updation Failed');            
                            window.location.href='../Manage Agent.php';
                            </script>";
                        }
    
    } 


    // Delete Branch
  @$DelID = $_GET['delid'];
  $quer = "delete from user where id = '$DelID'";
  $res = mysqli_query($con, $quer);
  if ($res){
  echo "
  <script>
  alert('Data Deleted!!');window.location.href='../Manage Agent.php?deleted=1';
  </script>";
  }
  mysqli_close($con);
} 
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../Admin.php'</script>";
}

?>