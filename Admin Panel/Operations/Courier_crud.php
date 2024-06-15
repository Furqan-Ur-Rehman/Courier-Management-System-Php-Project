<?php
    session_start();
    include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Agent') {
    if (isset($_POST['addcourier'])) {

        $userid = $_POST['userid'];
        $packagecate = $_POST['packagecate'];
        $amountcate = $_POST['amountcate'];
        $days = $_POST['days'];
        $courierdesc = $_POST['courierdesc'];
        $parcelweight = $_POST['parcelweight']; 
        $status =$_POST['status'];
        $branch = $_POST['branch'];
        $sendname = $_POST['sendname'];
        $sendaddress = $_POST['sendaddress'];
        $sendcont = $_POST['sendcont'];
        $sendcity = $_POST['sendcity'];
        $sendpin = $_POST['sendpin'];
        $sendcountry = $_POST['sendcountry'];
        $recname = $_POST['recname'];
        $reccont = $_POST['reccont'];
        $recadd = $_POST['recadd'];
        $reccity = $_POST['reccity'];
        $recpin = $_POST['recpin'];
        $reccountry = $_POST['reccountry'];
        $dateofdel = $_POST['dateofdel'];
        

        $InsertQuery = "insert into courier_details (userid, package_id, amount_cate, Days, courier_desc, parcel_weight,status_id,sender_branch,sender_name,sender_address,sender_contact,sender_city,sender_pincode,sender_country,receiver_name,receiver_contact,receiver_address,receiver_city,receiver_pincode,receiver_country,date_of_delivery) 
                        values ('$userid','$packagecate','$amountcate', '$days', '$courierdesc', '$parcelweight','$status' , '$branch','$sendname','$sendaddress','$sendcont','$sendcity','$sendpin','$sendcountry','$recname','$reccont','$recadd','$reccity','$recpin','$reccountry','$dateofdel')";
    
                        $insert = mysqli_query($con, $InsertQuery);
                        if($insert){      
                        echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add courier.php?added=1'</script>";
                        }
    } 


    if (isset($_POST['editcourier'])) {
        $userid = $_POST['userid'];
        $packagecate = $_POST['packagecate'];
        $amountcate = $_POST['amountcate'];
        $days = $_POST['days'];
        $courierdesc = $_POST['courierdesc'];
        $parcelweight = $_POST['parcelweight']; 
        $status =$_POST['status'];
        $branch = $_POST['branch'];
        $sendname = $_POST['sendname'];
        $sendaddress = $_POST['sendaddress'];
        $sendcont = $_POST['sendcont'];
        $sendcity = $_POST['sendcity'];
        $sendpin = $_POST['sendpin'];
        $sendcountry = $_POST['sendcountry'];
        $recname = $_POST['recname'];
        $reccont = $_POST['reccont'];
        $recadd = $_POST['recadd'];
        $reccity = $_POST['reccity'];
        $recpin = $_POST['recpin'];
        $reccountry = $_POST['reccountry'];
        $dateofdel = $_POST['dateofdel'];
        

        $UpdateQuery = "Update courier_details set userid='$userid', package_id ='$packagecate', amount_cate ='$amountcate', Days ='$days', courier_desc='$courierdesc', parcel_weight='$parcelweight',status_id ='$status',sender_branch = '$branch',sender_name ='$sendname',sender_address ='$sendaddress',sender_contact ='$sendcont',sender_city ='$sendcity',sender_pincode ='$sendpin',sender_country ='$sendcountry',receiver_name ='$recname',receiver_contact ='$reccont',receiver_address ='$recadd',receiver_city ='$reccity',receiver_pincode ='$recpin',receiver_country='$reccountry',date_of_delivery ='$dateofdel' 
                        where Tracking_id = $trackingid";
    
                        $update = mysqli_query($con, $UpdateQuery);
                        if($update){      
                        echo "<script>alert('Data has been Updated Successfully!');window.location.href = '../Manage courier.php?updated=1'</script>";
                        }
    } 
    

    // Delete Branch
  @$DelID = $_GET['delid'];
  $quer = "delete from courier_details where Tracking_id = '$DelID'";
  $res = mysqli_query($con, $quer);
  if ($res){
  echo "
  <script>
  alert('Data Deleted!!');window.location.href='../Manage Courier.php?deleted=1';
  </script>";
  }
  mysqli_close($con);
}
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../Admin.php'</script>";
}


?>