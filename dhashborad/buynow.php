<?php include "../common_dhashborad/headertop.php";?>
<?php include "../common_dhashborad/header.php";?>
<hr>
<div class="container1">
    <div class="payment-form">
        <h2>Payment Details</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="name">Cardholder Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <button type="submit">Submit Payment</button>
        </form>
    </div>
    <div class="card-preview">
        <h2>Card Preview</h2>
        <div class="card">
            <div class="card-number">1234 5678 9012 3456</div>
            <div class="card-info">
                <div class="expiry">MM/YY</div>
                <div class="cvv">CVV</div>
            </div>
            <div class="cardholder">Cardholder Name</div>
        </div>
    </div>
</div>