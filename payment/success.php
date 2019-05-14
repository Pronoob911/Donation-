<?php
	if(!empty($_GET['tid'])){
		$GET=filter_var_array($_GET,FILTER_SANITIZE_STRING);

		$tid=$GET['tid'];
		$amount=$GET['amount']/100;

	}
	else{
		header('Location: index.php');
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Payment Success</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
	<h2>Your payment is successful</h2>

	<p>Your transaction ID is<?php echo $tid ?></p>
	<p>Amount Donated: <?php echo $amount  ?></p>
	<p>Check your mail for more info</p>
	<a href="../index.php"><button class="btn btn-ligth mt-2">Go back to Home Page</button></a>	
</div>

</body>
</html>