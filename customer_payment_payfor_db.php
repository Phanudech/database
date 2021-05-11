<?php 
    session_start();
    include('server.php'); 
?>

<?php
    $Room_No = $_POST['Room_No'];
    $Pay_No = $_POST['Pay_No'];
    $sent_date = $_POST['sent_date'];
    $sent_time = $_POST['sent_time'];
    $Slipnumber = $_POST['Slipnumber'];
    $AccountName = $_POST['AccountName'];
    $BankName = $_POST['BankName'];

    //payment
    $sql="UPDATE
      payment 
    SET
      Pay_Status  = 2
    WHERE
      Pay_No = $Pay_No";
    mysqli_query($conn, $sql);

    //slipnumber
    $sql="UPDATE
      slipnumber  
    SET
      Slipnumber   = '$Slipnumber',
      sent_time   = '$sent_time',
      sent_date   = '$sent_date',
      AccountName   = '$AccountName',
      BankName   = '$BankName'
    WHERE
      Pay_No = $Pay_No";

    mysqli_query($conn, $sql);

    //Redirect
    $path = "customer_payment.php?Room_No=".$Room_No;
    header("Location: ".$path);
    exit();
?>