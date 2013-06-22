<?php
require_once('./lib/Stripe.php');
 
$stripe = array(
  secret_key      => 'sk_test_EWNwr6vQViyvUR2pnvwWTDYK',
  publishable_key => 'pk_test_7cw6SNXgq3gGCgXJhEFm3b4y'
);
 
Stripe::setApiKey($stripe['secret_key']);
?>