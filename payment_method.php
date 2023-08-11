<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #03889c;
    color: #fff;
    margin: 0;
    padding: 0;
}

.container {
    text-align: center;
    padding-top: 100px;
}

h2 {
    font-size: 36px;
    font-family: 'Roboto Mono', monospace;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    line-height: 1.6;
    color: #202125;
}

form {
    display: inline-block;
    margin-top: 20px;
}

input[type="radio"] {
    margin-right: 5px;
}

button[type="submit"] {
    background-color: #d2d2d2;
    font-family: 'Roboto Mono', monospace;
    color: black;
    height: 30px;
    width: 150px;
    border-radius: 5px;
    border: none;
    margin-top: 20px;
    transition-duration: 0.4s;
    cursor: pointer;
}

button[type="submit"]:hover {
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.473);
    transition-duration: 0.4s;
}

/* Media Queries */
@media (max-width: 600px) {
    h2 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
    }
}




  
</style>
</head>
<body>
    <div style="text-align: center; padding-top: 100px;">
        <h2>Payment Method</h2>
        <p>Please select your preferred payment method:</p>
 


        <<form action="buy.php" method="POST">
            <input type="radio" id="credit_card" name="payment_method" value="credit_card">
            <label for="credit_card">Credit Card</label><br>

            <input type="radio" id="paypal" name="payment_method" value="paypal">
            <label for="paypal">PayPal</label><br>

          
            <input type="radio" id="cash" name="payment_method" value="cash">
            <label for="paypal">Cash</label><br>

       

         
            <br>
            <button type="submit"> Proceed to Payment</button>
        </form>
    </div>
</body>
</html>
