<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	<title>Web Bán Laptop-PC</title>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>
		</div>
	</div>

	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
		$('#tabs-nav li:first-child').addClass('active');
		$('.tab-content').hide();
		$('.tab-content:first').show();
		$('#tabs-nav li').click(function(){
		  $('#tabs-nav li').removeClass('active');
		  $(this).addClass('active');
		  $('.tab-content').hide();
		  
		  var activeTab = $(this).find('a').attr('href');
		  $(activeTab).fadeIn();
		  return false;
		});
	</script>
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="
	sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
	
	<script src="https://www.paypal.com/sdk/js?client-id=AWlDvrjaQSHlDA_ta9P3sva_XFlyFWkX6v3DYNWQTWhHgEtvbXEbqGBl4XxW8kaaReOWsJgVagq_HeaI&currency=USD"></script>
	<script>
      paypal.Buttons({

      	style: {
		    layout:  'vertical',
		    color:   'blue',
		    shape:   'rect',
		    label:   'paypal'
		  },
        createOrder: function(data, actions) {
        	var tongtien = document.getElementById('tongtien').value;
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: tongtien
              }
            }]
          });
        },

        onApprove: function(data, actions) {

          return actions.order.capture().then(function(orderData) {
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                window.location.replace('http://localhost/web_mysqli/index.php?quanly=camon&thanhtoan=paypal');
          });
        },
        onCancle:function(data){
        	 window.location.replace('http://localhost/web_mysqli/index.php?quanly=thongtinthanhtoan');
        }
      }).render('#paypal-button');

    </script>
</html>