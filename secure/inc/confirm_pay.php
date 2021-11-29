<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Confirm paymemnt</title>
</head>

<body>
  <?php
  $account_number = $_GET['account_number'];
  $amount = $_GET['amount'];
  //add validation for account_number and Amount
  if (isset($account_number) && isset($amount)) {
    //check if account_number is a valid string
    if (!is_string($account_number)) die("Account number must be a valid string");
    //check if amount is a valid integer
    if (!is_numeric($amount)) die("Amount must be a valid integer");
  }
  ?>
  <?php if (!isset($_POST['submit'])) { ?>
    <form method="post" action="">
      <h2> Confirm payment </h2>
      <p>Please confirm transfer of <?php echo $amount; ?>
        to <?php echo $account_number; ?>
      </p>
      <input hidden style="display: none" type="text" id="account_number" name="account_number" value="<?php echo $account_number; ?>"><br>
      <input hidden style="display: none" type="text" id="amount" name="amount" value="<?php echo $amount; ?>"><br>
      <input hidden style="display: none" type="text" name="confirmed" value="confirmed">
      <input type="submit" name="submit" id="submit" value="Confirm transfer">
    </form>
  <?php } else {
    //get account number from POST
    $account_number = $_POST['account_number'];
    //get amount from POST
    $amount = $_POST['amount'];
  ?>
    <form>
      <h2> Payment Succeful </h2>
      <p>Payment of <?php echo $amount; ?> to <?php echo $account_number; ?> is successful. </p>
    </form>
  <?php } ?>
</body>