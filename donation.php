<?php
require 'init.php'; 

\Stripe\Stripe::setApiKey('sk_test_51OApbbDAcRPDvKyQvqu2rHWlX3DA3qLfl0cAPL1DG8gcUS1u91cGcWRKetEzvz8HFggWqKmX7qjFYCIZ6DHjXXae008ZjDxOok');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['stripeToken'];
    $amount = $_POST['amount'];

    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount * 100, 
            'currency' => 'usd',
            'description' => 'Donation',
            'source' => $token,
        ]);

        // Payment successful
        $success_message = 'Thank you for your donation.';
        echo '<script>
                setTimeout(function() {
                    var snackbar = document.createElement("div");
                    snackbar.textContent = "'.$success_message.'";
                    snackbar.style.cssText = "display: flex; justify-content: center; align-items: center; position: fixed; bottom: 20px; right: 20px; background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); z-index: 1;";
                    document.body.appendChild(snackbar);
                    setTimeout(function() {
                        document.body.removeChild(snackbar);
                    }, 5000);
                }, 500);
              </script>';
    } catch (\Stripe\Exception\CardException $e) {
        // Payment failed
        echo 'Payment failed. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
            body {
            background-image: url("hjhj.png");
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Calibri Light', sans-serif;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            max-width: 500px;
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            color: brown;
            margin-bottom: 20px;
        }

        form label {
            font-size: 18px;
            margin: 10px 0;
        }

        form input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        .stripe-button {
            display: block;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .stripe-button:hover {
            background-color: #555;
        }
          
        .back-link {
            background-color: wheat;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            color: brown;
            margin-top: 20px;
            display: block;
        }

        .back-link:hover {
            background-color: white;
        }
    </style>
</head>
<body>
    <form action="donation.php" method="post">
        <h1>Make a Donation</h1>
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required>

        <!-- Stripe Checkout script -->
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51OApbbDAcRPDvKyQH4DEPZpWuC74wLWUOCrS2rWMWnqzgKNXLTzWRL7p3brGgYwEyDTyID7xNCaTpO0GeBGtoEdw00jVcqn3ba"
                data-amount="100"
                data-name="Bws Charity"
                data-description="Donation"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="usd">
        </script>
        <a class="back-link" href="home.php">Go back to home</a>
    </form>
</body>
</html>
