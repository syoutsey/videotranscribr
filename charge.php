<!DOCTYPE html>
<html lang="en">
<body>
    <?php
  require_once('config.php');
  echo "loaded";
  $name = $_POST['full_name'];
  $email = $_POST['email_addr'];
  $link1 = $_POST['link1'];
  $link2 = $_POST['link2'];
  $link3 = $_POST['link3'];
  $link4 = $_POST['link4'];
  $link5 = $_POST['link5'];
  $total = $_POST['total'];
    $token  = $_POST['stripeToken'];
      echo "<br>link1 = $link1 <br> link2 = $link2 <br> link3 = $link3 <br> link4 = $link4 <br> link5 = $link5 <br>";
    var_dump($token);
  echo "<br>token = $token <br> name = $name <br> email = $email <br> link = $link <br> total = $total ";
  $customer = Stripe_Customer::create(
    array(
      'email' => $email,
      'card'  => $token
      )
    );
  echo "<br> customer created customer = $customer <br> total = $total";
 
  $charge = Stripe_Charge::create(
    array(
      'customer' => $customer->id,
      'amount'   => $total,
      'currency' => 'usd'
      )
    );
 
  echo "<h1>Successfully charged ($total/100)!</h1>";
    ?>
      </body>
</html>
