<?php 
    session_start();
    include('server.php'); 
?>

<?php
      $Room_No = $_POST['Room_No'];

      //check room
      $sql = "SELECT * FROM room WHERE Room_No = $Room_No";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      if($row['Status'] == 1){
        //Redirect
        $path = "employee_del.php";
        header("Location: ".$path);
        exit();
      }

      //change room status
      $sql="UPDATE room SET room.Status='1' WHERE Room_No = $Room_No";
      mysqli_query($conn, $sql);

      //delete customer
      $sql = "SELECT * FROM customer WHERE Room_No = $Room_No";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
    
      $Cus_id = $row['Cus_id'];
      $idNumber = $row['idNumber']; 
      
      $sql = "DELETE FROM customer WHERE Room_No = $Room_No";
      mysqli_query($conn, $sql);
      
      //delete tel
      $sql = "DELETE FROM customer_tel WHERE Cus_id = $Cus_id";
      mysqli_query($conn, $sql);
      
      //delete manage 
      $sql = "DELETE FROM manage WHERE Cus_id = $Cus_id";
      mysqli_query($conn, $sql);
    
      //delete idNumber
      $sql = "DELETE FROM idNumber WHERE idNumber = $idNumber";
      mysqli_query($conn, $sql);

      $outDate = date("Y-m-d");

      //checkout settle
      $sql = "UPDATE settle SET CheckOut = '$outDate' WHERE Cus_id = $Cus_id";
      mysqli_query($conn, $sql);
    
      //delete slipnumber
      $sql = "SELECT * FROM payment WHERE Room_No = $Room_No";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        print_r($row);
        $value = $row['Pay_No'];
        $sql_slip = "DELETE FROM slipnumber WHERE Pay_No = $value";
        mysqli_query($conn, $sql_slip);
      }

      $sql = "DELETE FROM slipnumber WHERE Pay_No = $Pay_No";
      mysqli_query($conn, $sql);

      //delete payment 
      $sql = "DELETE FROM payment WHERE Room_No = $Room_No";
      mysqli_query($conn, $sql);

      //Redirect
    $path = "employee_manage.php";
    header("Location: ".$path);
    exit();

    
?>