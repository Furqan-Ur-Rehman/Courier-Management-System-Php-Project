<?php
session_start();
include 'Connection.php';
if (@$_SESSION['DatabaseRole'] == 'Admin') {
        if (isset($_POST['addcountry'])) {
            $Countryname = $_POST['countryname'];

            $InsertQuery = "insert into branch_country (Branch_country) values ('$Countryname')";

                            $insert = mysqli_query($con, $InsertQuery);
                            if($insert){      
                            echo "<script>alert('Data has been Inserted Successfully!');window.location.href = '../Add Branch_country.php?added=1'</script>";
                            }
        } 


        if (isset($_POST['editcountry'])) {
            $Countryid = $_POST['Countryid'];
            $Branchcountry = $_POST['Branchcountry'];

            $UpdateQuery = "Update branch_country set Branch_country='$Branchcountry' where country_id = $Countryid";

                            $update = mysqli_query($con, $UpdateQuery);
                            if($update){      
                            echo "<script>alert('Data has been Updated Successfully!');window.location.href = '../Manage Br_country.php?updated=1'</script>";
                            }
        } 


        // Delete Branch
        @$DelID = $_GET['delid'];
        $quer = "delete from branch_country where country_id = '$DelID'";
        $res = mysqli_query($con, $quer);
        if ($res){
        echo "
        <script>
        alert('Data Deleted!!');window.location.href='../Manage Br_country.php?deleted=1';
        </script>";
        }
        mysqli_close($con);
}
else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../Admin.php'</script>";
}

?>