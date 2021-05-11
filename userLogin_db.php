<?php 
    session_start();
    include('server.php'); 
?>

<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Employee
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if(($row['Emp_username'] == $username && $row['Emp_password'] == $password)){
                
                $_SESSION['Emp_id'] = $row['Emp_id'];
                $_SESSION['Emp_name'] = $row['Emp_name'];            
                $_SESSION['Emp_lastname'] = $row['Emp_lastname'];            
                $_SESSION['Emp_Email'] = $row['Emp_Email'];            
                // $_SESSION['Emp_username'] = $row['Emp_username'];            
                // $_SESSION['Emp_password'] = $row['Emp_password'];            
                $_SESSION['Emp_Tel'] = $row['Emp_Tel'];            
                
                $path = "employee_manage.php";
                header("Location: ".$path);
                exit();
            }
        }


    //Customer
    $sql = "SELECT * FROM customer JOIN idnumber ON customer.idNumber = idnumber.idNumber";
    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if(($row['Cus_username'] == $username && $row['Cus_password'] == $password)){
                
                $_SESSION['Cus_Email'] = $row['Cus_Email'];            
                $_SESSION['Cus_username'] = $row['Cus_username'];            
                $_SESSION['Cus_password'] = $row['Cus_password'];            
                $_SESSION['Road'] = $row['Road'];            
                $_SESSION['District'] = $row['District'];            
                $_SESSION['Province'] = $row['Province'];            
                $_SESSION['Room_No'] = $row['Room_No'];            
                
                $_SESSION['idNumber'] = $row['idNumber'];            
                $_SESSION['Cus_name'] = $row['Cus_name'];            
                $_SESSION['Cus_lastname'] = $row['Cus_lastname'];    

                $path = "customer_manage.php";
                header("Location: ".$path);
                exit();
            }
        }
    
    $path = "userLogin.php";
    header("Location: ".$path);
    exit();

?>