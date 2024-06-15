<?php include 'Connection.php'; ?>
<?php session_start(); ?>

<!-- Login -->
<?php if (isset($_POST['LoginButton'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $CheckEmail = "select * from user where email = '$Email'";

    $query = mysqli_query($con, $CheckEmail);
    $EmailFound = mysqli_num_rows($query);

    if ($EmailFound) {
        $res = mysqli_fetch_assoc($query);
        $_SESSION['DatabasePassword'] = $res['password'];
        
        if($_SESSION['DatabasePassword'] == $Password){
            $_SESSION['DatabaseName'] = $res['UserName']; //echo $_SESSION['DatabaseName'];
            $_SESSION['Cust_id'] = $res['id'];
            $_SESSION['CustEmail'] = $res['email'];
            $_SESSION['CustContact'] =$res['contact'];
            $_SESSION['DatabaseRole'] = $res['Role'];
            
            if( $_SESSION['DatabaseRole'] == "Admin"){
                echo "<script>alert('Login Successfully');window.location.href = '../Admin Panel/Admin.php'</script>";
            }
            if($_SESSION['DatabaseRole'] == "Customer"){
                echo "<script>alert('Login Successfully');window.location.href = '../Admin Panel/Admin.php'</script>";
            }
            else if( $_SESSION['DatabaseRole'] == "Agent"){
                echo "<script>alert('Login Successfully');window.location.href = '../Admin Panel/Admin.php'</script>";
            }
        }
        else{
            echo "<script>alert('Password is Incorrect'); window.location.href = '../index.php'</script>";
        }
    }
    else{
        echo "<script>alert('Email is Incorrect'); window.location.href = '../index.php'</script>";
    }
} 
?>

<!-- Register -->
<?php if (isset($_POST['RegisterButton'])) {
    $id = $_POST['userid'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Contact = $_POST['Contact'];
    $Address = $_POST['Address'];
    $date = $_POST['dateofreg'];

    // $EncreptedPassword = password_hash($Password, PASSWORD_BCRYPT);

    $CheckEmail = "select * from user where email = '$Email'";

    $query = mysqli_query($con, $CheckEmail);
    $EmailFound = mysqli_num_rows($query);

    if($EmailFound){
        echo "<script>alert('Email Already Exist')</script>";
    }
    else{
        // $Date = date("d/m/Y");
        if(@$Role == "Agent"){
            $InsertQuery = "insert into user (id, UserName, email, password, contact, Address,Date_of_Registration,Role) values ('$Name','$Email','$Password','$Contact','$Address','$date', '$Role')";
            $Check = mysqli_query($con, $InsertQuery);
            if($Check){
                echo "<script>alert('Data has been Inserted');window.location.href = '../index.php'</script>";
            }
            else{
                echo "<script>alert('Data Insertion Failed !!!');window.location.href = '../index.php'</script>";
            }
        }
        else{
            $Role = "Customer";
            $InsertQuery = "insert into user (id, UserName, email, password, contact, Address,Date_of_Registration,Role) values ('$id','$Name','$Email','$Password','$Contact','$Address','$date', '$Role')";
            $Check = mysqli_query($con, $InsertQuery);
            if($Check){
                echo "<script>alert('Data has been Inserted');window.location.href = '../index.php'</script>";
            }
            else{
                echo "<script>alert('Data Insertion Failed !!!');window.location.href = '../index.php'</script>";
            }
        }
        
    }

} ?>


<?php if (isset($_POST['Logout'])) {
    session_destroy();
    echo "<script>alert('You have Logout out Successfully!');window.location.href = '../index.php';</script>";
}
?>