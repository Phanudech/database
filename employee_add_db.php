<?php 
    session_start();
    include('server.php'); 
?>

<?php
      $CheckIn = $_POST['CheckIn'];
      $Cus_name = $_POST['Cus_name'];
      $Cus_lastname = $_POST['Cus_lastname'];
      $Cus_Tel = $_POST['Cus_Tel'];
      $idNumber = $_POST['idNumber'];
      $Road = $_POST['Road'];
      $District = $_POST['District'];
      $Province = $_POST['Province'];
      $Cus_username = $_POST['Cus_username'];
      $Cus_password = $_POST['Cus_password'];
      $Room_No = $_POST['Room_No'];
      $Cus_Email = $_POST['Cus_Email'];
      $Emp_id = $_POST['Emp_id'];

      //check room
      $sql = "SELECT * FROM room WHERE Room_No = $Room_No";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      if($row['Status'] == 2){
        //Redirect
        $path = "employee_add.php";
        header("Location: ".$path);
        exit();
      }


      //Customer
      $sql = "INSERT INTO   customer  (
          idNumber,
          Cus_Email  ,
          Cus_username  ,
          Cus_password  ,
          Road  ,
          District  ,
          Province  ,
          Room_No  
    )
    VALUES(
        '$idNumber',
        '$Cus_Email',
        '$Cus_username',
        '$Cus_password',
        '$Road',
        '$District',
        '$Province',
        '$Room_No'
    )";
    mysqli_query($conn, $sql);
    
    //idNumber
    $sql = "INSERT INTO   idnumber  (
          idNumber  ,
          Cus_name  ,
          Cus_lastname  
    )
    VALUES(
        '$idNumber',
        '$Cus_name',
        '$Cus_lastname'
    )";
    mysqli_query($conn, $sql);
  
    //customer_tel
    $sql = "SELECT MAX(Cus_id) AS max FROM customer";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $current = $row['max'];
    
    $sql="INSERT INTO  customer_tel ( Cus_id ,  Cus_tel ) VALUES ('$current','$Cus_Tel')";
    mysqli_query($conn, $sql);
    
    //change room status
    $sql="UPDATE room SET room.Status='2' WHERE Room_No = $Room_No";
    mysqli_query($conn, $sql);
    
    //settle
    $sql = "SELECT MAX(Cus_id) AS max FROM customer";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $current = $row['max'];

    $sql="INSERT INTO   settle  (
          Cus_id  ,
          Room_No  ,
          CheckIn  ,
          CheckOut  
    )
    VALUES(
        '$current',
        '$Room_No',
        '$CheckIn',
        '-'
    )";
    mysqli_query($conn, $sql);

    //manage
    $sql = "SELECT MAX(Cus_id) AS max FROM customer";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $current = $row['max'];

    $sql="INSERT INTO   manage  (
          Cus_id  ,
          Emp_id 
    )
    VALUES(
        '$current',
        '$Emp_id'
    )";
    mysqli_query($conn, $sql);

    //Redirect
    $path = "employee_manage.php";
    header("Location: ".$path);
    exit();

    
?>