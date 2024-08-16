<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

   
    #footer b {
      font-size: 12px;
      font-weight: bold;
      font-family: "Georgia", serif;
      color: black;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .contact-card {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 20px;
      font-family: Arial, sans-serif;
      font-size: 14px;
      color: #333;
      background-color: peachpuff;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .contact-image {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid brown;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .contact-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .contact-info {
      text-align: center;
      padding-top: 20px;
    }

    .contact-info h3 {
      margin-top: 0;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .contact-info p {
      margin-bottom: 5px;
    }
    .contact-info {
      text-align: center;
      padding-top: 20px;
    }

    .contact-info h3 {
      margin-top: 0;
      font-size: 24px;
      margin-bottom: 10px;
      color: brown;
    }

    .contact-info p {
      margin-bottom: 5px;
      font-size: 16px;
      line-height: 1.5;
      color: #555;
    }
    #footer{
      font-size: 55px;
    }

    input[type="text"] {
      width: 68%;
    padding: 6px;
    margin-bottom: 5px;
    border: 6px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}


input[type="email"] {
  width: 73%;
    padding: 6px;
    margin-bottom: 5px;
    border: 6px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}


input[type="tel"] {
  width: 72%;
    padding: 6px;
    margin-bottom: 5px;
    border: 6px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}


input[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  background-color: #4caf50;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #db7565;
}
  </style>
</head>
<body>
<div class="contact-card">
    <form id="contact-form" method="post" action="process_contact.php">
      <div class="contact-image">
        <img src="mimi.png" alt="Profile Picture">
      </div>
      <div class="contact-info">
        <h3>Contact Us</h3>
        <p>Name: <input type="text" id="contact-name" placeholder="Your Name"></p>
        <p>Email: <input type="email" id="contact-email" placeholder="Your Email"></p>
        <p>Phone: <input type="tel" id="contact-phone" placeholder="Your Phone"></p>
        <p>Address: <input type="text" id="contact-address" placeholder="Your Address"></p>
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
  

  <div id="footer">
    <b>BWS CHARITY & DONATIONS, COPYRIGHT © 2023 ALL RIGHTS RESERVED.</b>
  </div>

  <script>
  document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); 
      
    // receive user data
    var name = document.getElementById("contact-name").value;
    var email = document.getElementById("contact-email").value;
    var phone = document.getElementById("contact-phone").value;
    var address = document.getElementById("contact-address").value;
    
    
    fetch('process_contact.php', {
      method: 'POST',
      body: JSON.stringify({ name, email, phone, address }),
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      if (response.ok) {
        alert('Form submitted successfully!');
       
      } else {
        throw new Error('Form submission failed!');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      
    });
  });
</script>
</body>
</html>