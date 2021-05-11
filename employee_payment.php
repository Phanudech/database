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
#create_btn{
    border-radius: 25px;
    font-size: 25px;
    margin-left: 1075px; 
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

<!-- Form -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<br>
<!------ Include the above in your HEAD tag ---------->
<!-- create button-->
<p><a href="employee_create.php"><button class="w3-button w3-blue w3-xlarge" id="create_btn">สร้างใบเเจ้งชําระเงิน</button></a></p>

<!-- Table -->
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">ใบแจ้งชําระเงิน</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th style="text-align:right;">
                          ลําดับ
                        </th>
                        <th style="text-align:right;">
                          เลขห้อง
                        </th>
                        <th style="text-align:right;">
                          จํานวนเงินที่ต้องชําระ (บาท)
                        </th>
                        <th style="text-align:right;">
                           ชื่อบัญชีผู้โอน
                        </th>
                        <th style="text-align:right;">
                          ธนาคาร
                        </th>
                        <th style="text-align:right;">
                          เลขที่สลิป
                        </th>
                        <th style="text-align:right;">
                          วันที่โอนเงิน
                        </th>
                        <th style="text-align:right;">
                          เวลาที่โอนเงิน
                        </th>
                        <th style="text-align:right;">
                          สถานะ
                        </th>
                        <th style="text-align:right;">
                          ดําเนินการ
                        </th>
                      </tr></thead>
                      <tbody style="text-align:center;">
                      <?php
                        $i = 0;
                        $sql = "SELECT * FROM (payment JOIN slipnumber ON payment.Pay_No = slipnumber.Pay_No) JOIN pay_status ON payment.Pay_Status = pay_status.pay_id ORDER BY payment.Pay_No DESC";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){ ?>
                            <?php 
                                $no = $row['Pay_No']; 
                            ?>
                                
                            <tr>
                                <td style="text-align:right;"> <?php echo $i+1; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['Room_No']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['AmountDue']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['AccountName']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['BankName']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['Slipnumber']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['sent_date']; ?> </td>
                                <td style="text-align:right;"> <?php echo $row['sent_time']; ?> </td>
                                <?php if($row['Pay_Status'] == 1){?>
                                    <td  style="text-align:right;" class="text-danger"> <?php echo $row['pay_name']; ?> </td>
                                <?php }else if($row['Pay_Status'] == 2){?>
                                    <td  style="text-align:right;" class="text-warning"> <?php echo $row['pay_name']; ?> </td>
                                <?php }else if($row['Pay_Status'] == 3){?>
                                    <td  style="text-align:right;" class="text-success"> <?php echo $row['pay_name']; ?> </td>
                                <?php }?>
                                <!-- ปุ่มดําเนินการ-->
                                <?php if($row['Pay_Status'] == 1){?>
                                    <td style="text-align:right;"> </td>
                                <?php }else if($row['Pay_Status'] == 2){?>
                                    <td style="text-align:right;">
                                        <a href="employee_payment_db.php?pay_no=<?php echo $no; ?>">
                                            <button type="button" class="btn btn-outline-primary btn-sm">ยืนยัน</button></td>
                                        </a>
                                <?php }else if($row['Pay_Status'] == 3){?>
                                    <td style="text-align:right;"> </td>
                                <?php }?>
                                <?php $i++; ?>
                            </tr>
                        <?php } ?>

                        
                       

<!-- <script src='https://code.jquery.com/jquery-3.6.0.min.js'>
    $(document).ready(function(){
        $("#add_customer").submit(function(){
            
        });
    });
</script> -->

</body>
</html>