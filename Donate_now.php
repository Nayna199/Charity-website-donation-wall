
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    
       
        body {
            background-image: url("hjhj.png.");
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
        .header {
    justify-content: center;
    align-items: center;
}



        .donation-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            max-width: 500px;
            margin: 60px;
        }

        .donation-form h2 {
            text-align: center;
            font-size: 18px;
            font-family: "Georgia", serif;
        }

        .donation-form form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .donation-form label {
            font-size: 18px;
            margin: 10px 0;
        }

        .donation-form .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .donation-form .input-group label {
            flex: 1;
        }

        .donation-form .input-group input,
        .donation-form .input-group select {
            flex: 2;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        .donation-form input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .donation-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="donation-form">
        <h2>Make a Donation</h2>
        <form action="process_donation.php" method="post">
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

           
            <div class="input-group">
                <label for="amount">Donation Amount:</label>
                <input type="number" id="amount" name="amount">
            </div>

            
            <div class="input-group">
                <label for="payment">Payment Method:</label>
                <select id="payment" name="payment">
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            
            <div class="input-group">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>

            <div class="input-group">
                <label for="card_holder">Card Holder Name:</label>
                <input type="text" id="card_holder" name="card_holder" required>
            </div>

            <div class="input-group">
                <label for="card_expiration">Card Expiration Date:</label>
                <input type="text" id="card_expiration" name="card_expiration" placeholder="MM/YY" required>
            </div>

            <div class="input-group">
                <label for="card_cvv">Card CVV:</label>
                <input type="text" id="card_cvv" name="card_cvv" required>
            </div>
           

            <input type="submit" value="Submit Donation">
        </form>
        <a href="home.php">Go back to home</a>

    </div>
</body>
</html>
