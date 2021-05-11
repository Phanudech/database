<?php 
    session_start();
    include('server.php'); 
?>

<?php 
  $Room_No = $_POST['Room_No'];
  $Pay_Status = 1;
  $Emp_id = $_POST['Emp_id'];
  $AmountDue = $_POST['AmountDue'];
  $Slipnumber = '';
  $unit_water = $_POST['unit_water'];
  $unit_elec = $_POST['unit_elec'];

  //check room
  $sql = "SELECT * FROM room WHERE Room_No = $Room_No";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if($row['Status'] == 1){
    //Redirect
    $path = "employee_create.php";
    header("Location: ".$path);
    exit();
  }

    //payment
    $sql="INSERT INTO    payment   (
        Room_No   ,
        Pay_Status   ,
        Emp_id   ,
        AmountDue   ,
        unit_water   ,
        unit_elec   
    )
    VALUES(
        '$Room_No',
        '1',
        '$Emp_id',
        '$AmountDue',
        '$unit_water',
        '$unit_elec'
    )";
    mysqli_query($conn, $sql);

    //slipnumber
    $sql = "SELECT MAX(Pay_No) AS max FROM payment";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $current = $row['max'];
    $sql = "INSERT INTO    slipnumber   (
           Slipnumber   ,
           Pay_No,
           sent_time   ,
           sent_date   ,
           AccountName   ,
           BankName   
    )
    VALUES(
        '-',
        '$current',
        '-',
        '-',
        '-',
        '-'
    )";
    mysqli_query($conn, $sql);

    //Redirect
    $path = "employee_payment.php";
    header("Location: ".$path);
    exit();
?>
