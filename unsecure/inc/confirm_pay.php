<?php
require __DIR__ .  '/header.php';
?>

<body>
  <?php
  // get account number from GET
  $account_number = $_GET['account_number'];
  // get amount from GET
  $amount = $_GET['amount'];
  ?>
  <?php if (!isset($_POST['submit'])) { ?>
    <form method="post" action="">
      <input hidden type="text" id="account_number" name="account_number" value="<?php echo $account_number; ?>"><br>
      <input hidden type="text" id="amount" name="amount" value="<?php echo $amount; ?>"><br><br>
      <input hidden type="text" name="confirmed" value="confirmed">
      <input type="submit" name="submit" id="submit" value="Confirm transfer">
    </form>

    <h2> Confirm payment </h2>
    <p>Please confirm transfer of <?php echo $amount; ?>
      to <?php echo $account_number; ?>
    </p>
  <?php } else {
    //get account number from POST
    $account_number = $_POST['account_number'];
    //get amount from POST
    $amount = $_POST['amount'];
  ?>
    <h2> Payment Succeful </h2>
    <p></p>Payment of <?php echo $amount; ?> to <?php echo $account_number; ?> is successful. </p>
  <?php } ?>
</body>