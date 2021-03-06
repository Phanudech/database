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
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
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
    margin-left: 525px;
    border-radius: 25px;
    font-size: 25px;
}
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
#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
#amount{
    border:none;
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
      <h1 id="font"><a href="employee_manage.php">????????????????????????????????????????????????</a></h1>
      <h4 class="text-uppercase">????????????????????????????????????</h4>
    </div>
</div>

<!-- Form -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Invoice -->
<form action="employee_create_db.php" method="POST">
<div id="invoice">
    <div class="toolbar hidden-print">
        <!-- <hr> -->
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <!-- <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a> -->
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <h1 style="color:#3989c6;">
                            ????????????????????????????????????????????????
                            </h1>
                        </h2>
                        <div>??????????????????509/1 ?????????????????????????????????</div>
                        <div>????????????????????????????????????</div>
                        <div>??????????????????????????????????????? 10520</div>
                    </div>
                </div>
            </header>
            <main>
                <input type="number" name="Emp_id" value=<?php echo $_SESSION['Emp_id']; ?> hidden>
                <div class="row contacts">
                <div class="col invoice-to">
                        <div class="text-gray-light">Room ID : <input required max=999 min=101 type="number" name="Room_No"></div>
                        <div class="address">??????????????????????????????????????? : 0231106308</div>
                        <div class="address">??????????????????????????? : ????????????????????????????????????????????????</div>
                        <div class="email">?????????????????? : ????????????????????? </div>
                    </div>
                    <div class="col invoice-to">
                        <!-- <h2 class="to">John Doe</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com">john@example.com</a></div> -->
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id" >?????????????????????????????????????????????</h1>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">??????????????????????????????</th>
                            <th class="text-right">????????????????????????????????? (unit)</th>
                            <th class="text-right">???????????????????????????????????? (baht)</th>
                            <th class="text-right">????????????????????? (baht))</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>?????????????????????????????????</h3></td>
                            <td class="unit" style="text-align:center;">-</td>
                            <td class="qty"  style="text-align:center;">-</td>
                            <td class="total" style="text-align:right;">4000</td>
                        </tr>
                        <tr>
                            <td class="no">02</td>
                            <td class="text-left"><h3>?????????????????????</h3></td>
                            <td style="text-align:center;"><input style="width: 4em" required size=20 type="number" id='water' name="unit_water" step="any"></td>
                            <td class="qty" style="text-align:center;">16.00</td>
                            <td class="total" style="text-align:right;"><input id='water_amount' required value=0 max=100 min=0 type="number" value=0 disabled></td>
                        </tr>
                        <tr>
                            <td class="no">03</td>
                            <td class="text-left"><h3>???????????????</h3></td>
                            <td style="text-align:center;"><input style="width: 4em" size=20 type="number" id='elec' name="unit_elec" step="any"></td>
                            <td class="qty" style="text-align:center;">6.00</td>
                            <td class="total" style="text-align:right;"><input id='elec_amount' max=100 min=0 type="number" value=0 disabled></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">??????????????????????????????????????????</td>
                            <td><input type='text' name="AmountDue" value=0 readonly id='amount'> ?????????</td>
                        </tr>
                    </tfoot>
                </table>
            </main>
            
        </div>
        <hr>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->        
        <p><input type='submit' class="w3-button w3-blue w3-xlarge" id='create_btn' value="???????????????????????????????????????????????????????????????"></p>
        <div></div>
       
    </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#water").keyup(function(){
            let count = parseFloat($('#water').val());
            $('#water_amount').val(count*16);

            let water_amount = parseFloat($('#water_amount').val());
            let elec_amount = parseFloat($('#elec_amount').val());

            $('#amount').val(water_amount+elec_amount+4000);
        }),
        $("#elec").keyup(function(){
            let count = parseFloat($('#elec').val());
            $('#elec_amount').val(count*6);
            
            let water_amount = parseFloat($('#water_amount').val());
            let elec_amount = parseFloat($('#elec_amount').val());

            $('#amount').val(water_amount+elec_amount+4000);
        });
    });
</script>
</body>
</html>