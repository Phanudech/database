<?php 
    session_start();
    include('server.php'); 
    $floor = $_GET['floor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .grey-bg {  
        background-color: #F5F7FA;
    }
    body {
    background-color: #f9f9fa
}
#font{
    font-family: 'Chonburi', cursive;
    font-size: 40px;
}
#top{
    width: 1300px;
    margin-left: 5px;
}
.top-bar{
    background-color: #d2f4f9;
    padding: 10px;
    border-radius: 10px;
    
}
.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}

    </style>
</head>
<body>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
<!-- Top bar -->
<div class="grey-bg container-fluid" >
  <section id="stats-subtitle">
  <div class="row" id="top">
    <div class="col-12 mt-1 mb-1 top-bar">
      <h1 id="font"><a href="employee_manage.php">หอพักนาคบำรุงศรี</a></h1>
      <h4 class="text-uppercase">ยินดีต้อนรับ</h4>
    </div>
</div>

<div class="container">
    <br><br><br>
<div class="row justify-content-center">
		<div class="col-12 col-md-12 col-lg-12 pb-5">

                    <!--Form with header-->

                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Customer List : Floor <?php echo $floor; ?></h3>
                                    <p class="m-0">รายชื่อผู้พักอาศัย ชั้นที่ <?php echo $floor?></p>
                                </div>
                            </div>
                        <br>
                       
                       <!-- 1 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>01</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'01';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- 2 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>02</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'02';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- 3 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>03</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'03';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- 4 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>04</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'04';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                    <!-- 5 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>05</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'05';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- 6 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID :  <?php echo $floor; ?>06</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'06';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                       
                       <!-- 7 -->
                       <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>07</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'07';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- 8 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>08</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'08';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- 9 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>09</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'09';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <!-- 10 -->
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row container d-flex justify-content-center">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card user-card-full">
                                            <div class="row m-l-0 m-r-0">
                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                    <div class="card-block text-center text-white">
                                                        <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                        <h6 class="f-w-600">Room ID : <?php echo $floor; ?>10</h6>
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="card-block">
                                                        <!-- data -->
                                                        <?php
                                                            $id_room = $floor.'10';
                                                            $sql = "SELECT * FROM ((((room JOIN customer ON room.Room_No = customer.Room_No) JOIN customer_tel ON customer.Cus_id = customer_tel.Cus_id) JOIN idNumber ON customer.idNumber = idnumber.idNumber) JOIN manage ON customer.Cus_id = manage.Cus_id) JOIN settle ON room.Room_No = settle.Room_No WHERE floor_number = $floor AND settle.CheckOut = '-' AND settle.Room_No = $id_room;";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);
                                                            if($row == NULL){?>
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">ห้องว่าง</p>
                                                            </div>
                                                           
                                                        </div>
                                                            <?php }else{ ?>

                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Customer ID</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_id']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_name'].' '.$row['Cus_lastname']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Tel.</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_tel']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Cus_Email']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <p sytle="display:inline;" class="m-b-10 f-w-600">Identification card</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['idNumber']; ?></h6>
                                                            </div>
                                                        </div>

                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Road</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Road']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">District</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['District']; ?></h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Province</p>
                                                                <h6 class="text-muted f-w-400"><?php echo $row['Province']; ?></h6>
                                                            </div>
                                                        </div>
                                                                        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                       <!-- wait -->
                      
                        </div>
                    <!--Form with header-->


                </div>
	</div>
</div>

<!-- List -->



</body>
</html>