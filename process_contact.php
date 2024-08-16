<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "newnew";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    $create_db_query = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (!mysqli_query($con, $create_db_query)) {
        echo "Error creating database: " . mysqli_error($con);
    }

    $create_table_query = "CREATE TABLE IF NOT EXISTS user_contacts (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            email VARCHAR(255) NOT NULL,
                            phone VARCHAR(20) NOT NULL,
                            address VARCHAR(255) NOT NULL,
                            submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                          )";

    if (!mysqli_query($con, $create_table_query)) {
        echo "Error creating table: " . mysqli_error($con);
    }

    $insert_query = "INSERT INTO user_contacts (name, email, phone, address) VALUES (?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($con, $insert_query)) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $address);

        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $address = $data['address'];

        if (mysqli_stmt_execute($stmt)) {
            http_response_code(200);
        } else {
            http_response_code(500);
            echo "Error inserting data: " . mysqli_error($con);
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($con);
}
?>
