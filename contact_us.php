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
            color: brown;
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
        .donation-form .input-group select,
        .donation-form .input-group textarea {
            flex: 2;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        .donation-form input[type="submit"],
        .donation-form a {
            display: inline-block;
            padding: 10px 20px;
            background-color: peachpuff;
            color: brown;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
            margin-top: 20px; 
        }

        .donation-form input[type="submit"]:hover,
        .donation-form a:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="donation-form">
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="post">
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="fullname" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="contactno" required>
            </div>

            <div class="input-group">
                <label for="message">Message:</label>
                <textarea rows="10" id="message" name="message" required></textarea>
            </div>

            <input type="submit" value="Send Message">
        </form>
        <a class="donate-button" href="home.php">Go back to home</a>
    </div>
</body>
</html>
