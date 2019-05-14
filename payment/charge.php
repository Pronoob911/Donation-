<?php


require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_nBSyHQYSsiiTcTLZi3ECrGUE00wMs2aSjk');

//sanitize post array

$POST=filter_var_array($_POST, FILTER_SANITIZE_STRING);

$firstName=$POST['firstName'];
$lastName=$POST['lastName'];
$email=$POST['email'];
$token=$POST['stripeToken'];
$amount=$POST['amount'];

echo $amount;
echo $token;

//create customer in stripe

$customer= \Stripe\Customer::create(array(
	"email"=> $email,
	"source"=> $token

));

//charge customer

$charge=\Stripe\Charge::create(array(
	"amount"=> $amount."00",
	"currency"=>"inr",
	"description"=> "Donation",
	"customer"=> $customer->id

	));

 header('Location: success.php?tid='.$charge->id.'&amount='.$charge->amount);


?>