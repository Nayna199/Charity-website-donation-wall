<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Charity Page</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
    body, ul {
            margin: 0;
            padding: 0;
        }

        /* Styling for donation wall section */
        #donation-wall {
            padding: 20px;
            text-align: center;
            background-color: transparent;
        }

        .donation-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            background-color: transparent; /* Remove the background color */
        }

        .donation-item {
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    background-color: transparent;
    text-align: left; /* Align text to the left */
    margin: 20px; /* Adjust margin for spacing between items */
}

.donation-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.donation-item p {
    margin: 0;
    padding: 5px 0; 
    font-size: 18px;
    color: black;
    font-weight: bold; 
}

.donation-item p:nth-child(odd) {
    color: brown; 
        
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include('header.php'); ?>
    </header>

    <!-- Donate Section -->
    <section id="donate-section">
    <div id="page-container" style="margin-top: 50px; position: relative; min-height: 84vh;">
    <div class="container">
        <div id="content-wrap" style="padding-bottom: 75px;">
            <div class="cute-text-box">
                <h1> -Your Donation, Their Hope!💘 <br> Be a Hero for a Cause 🦸🏻‍♂️💞</h1>
                <h2>along with our team BWS Donations 💗🤝🏻</h2>
                <a href="donation.php" class="donate-button">Donate Now ❤</a>
                <p class="donate-text">Your donation can make a difference and bring hope to those in need💝.</p>
                <a href="slideshow.php" class="donate-button see-more-button">See More about who you're helping 💭</a>
            </div>
        </div>
    </div>
    </section>

   
   
  
    </section>

    <!-- About BWS Donations Section -->
    <section id="about-bws-section">
        <!-- Content for about BWS donations -->
        <div class="container">
  <div class="cute-text-box">
    <h1 class="mt-4 mb-3">About BWS Donations</h1>
    <p>
      Welcome to BWS Donations, a beacon of hope and compassion. At BWS, we believe in the power of collective kindness and its ability to transform lives and communities. Our journey is driven by a simple yet profound mission: to make the world a better place, one act of generosity at a time.
    </p>
   
    <h2>Our Vision</h2>
    <p>
      Our vision is a world where no one has to endure the burden of suffering, hunger, or despair. We envision a global community united by empathy, extending a helping hand to those in need, regardless of their background, race, or circumstances.
    </p>
  </div>

    </section>
    <section id="our-mission">
    <div class="container">
    <div class="content-box">
      <h1 class="mt-4 mb-3">Why should we donate?</h1>
      <h2>Our Mission</h2>
      <p>
        Our mission is to make a positive impact on the lives of those in need. Through generous donations, we aim to create a better world where everyone has the opportunity to thrive.
      </p>
      <h2>Success Story</h2>
      <p>
        Meet Sarah, a devoted supporter of our charity. Her ongoing contributions have transformed the lives of countless individuals and families. Sarah's commitment is an inspiration to us all.
      </p>
      <p>
        Sarah's journey with our charity began with a simple desire to give back to her community. She started by volunteering at our local food drives, helping distribute essential supplies to families in need. Her dedication to making a difference was evident from the start.
    </p>
    </div>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Charity Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  

<!-- Donation Wall Section -->
<section id="donation-wall">
    <div class="container">
        <h2>Donation Wall</h2>
        <div class="donation-container">
            <?php
            // Include database connection
            include('db_config.php');

            // Retrieve donations from the database
            $sql = "SELECT * FROM donations ORDER BY donation_id DESC LIMIT 10"; // Adjust query as needed
            $result = $conn->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display donation information
                        echo '<div class="donation-item">';
                        echo '<p>Donation ID: ' . $row['donation_id'] . '<br>';
                        echo '📞 Donor Name : ' . $row['donor_name'] . '<br>';
                        echo '💡 Amount : ' . $row['amount'] . '<br>';
                        echo '💭 Message: ' . $row['message'] . '<br>';
                        if (isset($row['msg'])) {
                            echo 'Message: ' . $row['message'] . '</p>';
                        } else {
                            echo '.';
                        }
                        echo '</div>';
                    }
                } else {
                    echo "No donations yet.";
                }
            } else {
                echo "Error retrieving donations: " . $conn->error;
            }
            $conn->close();
            ?>
        </div>
    </div>
</section>

    </section>

    <!-- Footer -->

</body>
</html>

  
   <script>
    // Add a class when the section is in view
document.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
        if (rect.top <= viewHeight * 0.75 && rect.bottom >= 0.25 * viewHeight) {
            section.classList.add('in-view');
        }
    });
});
</script>
    <!-- Footer -->
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>
