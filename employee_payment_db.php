<?php 
    session_start();
    include('server.php'); 
?>

<?php
    $Pay_No = $_GET['pay_no'];

    $sql="UPDATE payment SET Pay_Status  = 3 WHERE Pay_No = $Pay_No";
    mysqli_query($conn, $sql);

    //Redirect
    $path = "employee_payment.php";
    header("Location: ".$path);
    exit();
?>