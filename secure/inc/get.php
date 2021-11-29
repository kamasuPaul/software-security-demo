<?php ?>

<body>
<form method="get" action="inc/confirm_pay.php">
  <?php if (!isset($_GET['amount'])) { ?>
    <h2>Payment form</h2>
      <label for="account_number">Account number:</label><br>
      <input type="text" id="account_number" name="account_number" placeholder="21384588393994"><br>
      <label for="amount">Amount:</label><br>
      <input type="number" id="amount" name="amount" placeholder="20000"><br><br>
      <input type="submit" id="submit" value="Submit">

      <p>By clicking the "Transfer" button, the amount will be deducted from your account.</p>
    <?php } ?>
    </form>
</body>