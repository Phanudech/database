<?php 
    session_start();
    include('server.php'); 
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
		<div class="col-12 col-md-8 col-lg-6 pb-5">

                    <!--Form with header-->

                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Customer List</h3>
                                    <p class="m-0">ดูรายชื่อผู้พักอาศัย</p>
                                </div>
                            </div>
                          <br>
                            <div class="container col-sm-5">
                                <div class="list-group">
                                    <a href="employee_list_room.php?floor=1" class="list-group-item list-group-item-action">ชั้นที่ 1</a>
                                    <br>
                                    <a href="employee_list_room.php?floor=2" class="list-group-item list-group-item-action">ชั้นที่ 2</a>
                                    <br>
                                    <a href="employee_list_room.php?floor=3" class="list-group-item list-group-item-action">ชั้นที่ 3</a>
                                    <br>
                                    <a href="employee_list_room.php?floor=4" class="list-group-item list-group-item-action">ชั้นที่ 4</a>
                                    <br>
                                    <a href="employee_list_room.php?floor=5" class="list-group-item list-group-item-action">ชั้นที่ 5</a>
                                </div>
                            </div>
                        <br>

                        </div>
                    <!--Form with header-->


                </div>
	</div>
</div>

<!-- List -->



</body>
</html>