<?php

$active = array(
    'BWS CHARITY & DONATIONS' => '',
    'Contact Us' => '',
    'About Us' => '',
    'Our Mission' => ''
);
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
            font-family: 'Arial', sans-serif;
            color: brown;
        }

        .header {
            background-color: transparent;
            padding: 20px;
            text-align: center;
        }

        .header a {
            font-size: 20px;
            font-weight: bold;
            font-family: 'Calibri Light', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 30px;
            text-decoration: none;
            padding: 0 20px;
            display: inline-block;
            color: brown; 
        }

        .header a:hover {
            color: brown; 
            background-color: peachpuff;
            border-radius: 6px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: brown;
            margin-top: 20px;
        }

        .header .nav-links {
            margin-top: 50px;
        }
    </style>
</head>
<body>
  <div class "header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='act'"; ?>>BWS CHARITY & DONATIONS 👨‍👩‍👧‍👦</a>

  </div>
</body>
</html>
