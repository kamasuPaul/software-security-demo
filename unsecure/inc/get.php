<?php ?>
<body>
<h2>Payment form</h2>

<form action="/action_page.php">
  <label for="account_number">Account number:</label><br>
  <input type="text" id="account_number" name="account_number" placeholder="21384588393994"><br>
  <label for="amount">Amount:</label><br>
  <input type="text" id="amount" name="amount" placeholder="20000"><br><br>
  <input type="submit" value="Transfer">
</form> 

<p>By clicking the "Transfer" button, the amount will be deducted from your account.</p>

</body>
