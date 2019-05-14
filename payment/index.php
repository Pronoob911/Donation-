<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <style type="text/css">
          

      </style>
</head>
<body>
<div class="container">

	<h2 class="my-4 text-center">Donation Page<span id="total"></span></h2>
<form action="charge.php" method="post" id="payment-form">
  <div class="form-row">

    <input type="" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Enter Amount to Donate" name="amount">
  	<input type="" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First name" name="firstName">

  	<input type="text" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last name" name="lastName">

  	<input type="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email" name="email">
    
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</div>




<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="js/charge.js"></script>
</body>
</html>