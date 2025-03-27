<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$vnp_TmnCode = "UD2KZW06";
$vnp_HashSecret = "HUQJSLMKGFXYCNYOWXBBEYDADEGNMOBB"; 
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/web_mysqli/index.php?quanly=camon";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));


