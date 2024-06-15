<?php 
        include('Layout/header.php');
        include('Layout/sidebar.php');
        include('Operations/Connection.php');

        // session_start();
        if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Agent') {
        } 
        else {
            // echo "<script>alert('Please Login first then accessed, Thankyou!')<script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }
            
        
?>
<!-- Content wrapper -->
<!-- <div class="content-wrapper">
</div> -->
<!-- Content wrapper -->
       