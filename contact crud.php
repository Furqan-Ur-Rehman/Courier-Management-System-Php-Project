<?php
    session_start();
    include('Operations/Connection.php');

if(@$_SESSION['DatabaseRole'] == 'Customer' && $_GET['delid'] != '' || @$_SESSION['DatabaseRole'] == 'Agent' && $_GET['delid'] != ''){
        echo "<script>alert('Access Denied!')</script>";
        echo "<script>window.location.href = 'Admin Panel/view Contact.php'</script>";
}
else if(@$_SESSION['DatabaseRole'] == 'Admin' && $_GET['delid'] != ''){
    
    // Delete Contact
    @$DelID = $_GET['delid'];
    $quer = "delete from insert_contact where id = '$DelID'";
    $res = mysqli_query($con, $quer);
    if ($res){
    echo "
    <script>
    alert('Data Deleted!!');window.location.href='Admin Panel/view Contact.php?deleted=1';
    </script>";
    }
    mysqli_close($con);
} 
else if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Agent') {
    
    
    //Send Message from Customer
    if(isset($_POST['usubmit'])){
        if($_POST['uname']== "" && $_POST['email']== "" && $_POST['message']== ""){
            echo "<script>alert('Please fill all these Fields'); window.location.href='index.php';</script>";
        }
        else{
            $userid = $_SESSION['Cust_id'];
            $name = $_POST['uname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $insert = "insert into insert_contact(uid,User_Name,User_Email,User_message) values('$userid','$name','$email','$message')";
            $run = mysqli_query($con, $insert);
            if($run){
                echo "<script>alert('Your Contact details has been Successfully Submitted, please stay with your logged in dashboard for reciving answer!'); window.location.href='index.php';</script>";
            }
        }
    }

    //Reply from Admin Against Customer Question
    if(isset($_POST['replymessage'])){
        $userid = $_POST['userid'];
        $reply = $_POST['usermessage'];
        $update = "Update insert_contact set Reply ='$reply' where User_Id = '$userid'";
        $run = mysqli_query($con, $update);
        if($run){
            echo "<script>alert('Our Reply has been Successfully Submitted into your Dashboard, Please Check it!'); window.location.href='Admin Panel/View Contact.php?added=1';</script>";
        }
    }    
}
else {
    // echo "<script>alert('Access Denied!')</script>";
    echo "<script>alert('please login first, then enter your query here!')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}

?>