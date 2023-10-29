<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add the Font Awesome library for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<style>
/* Existing styles */
body {
    font-family: Arial, sans-serif;
    background-image: url('hero.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.login-container {
    max-width: 350px;
    margin: 0 auto;
    margin-top: 50px;
    text-align: center;
    padding: 20px;
    border: 5px solid #800000;
    border-radius: 5px;
    background-color: transparent;
    /*background-color: #808000;*/
    
}

input[type="email"], input[type="password"] {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid #800000;
    border-radius: 5px;
}

button {
    width: 40%;
    padding: 10px;
    background-color: #800000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#error-message {
    color: red;
    margin-top: 10px;
}

.hidden {
    display: none;
}

h2 {
    font-size: 46px;
}

/* New styles for the password toggle */
.password-container {
    position: relative;
}


</style>
<body>  

    <div class="login-container">
        <h4>Yvonne Fashions Admin.</h4>
        <h2>Login</h2>
        <form id="login-form" action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" autocomplete="nope" required>
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="nope" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
 

  <!--
  

 //<?php
// Database connection details
//$host = 'localhost';
//$username = 'root';
//$password = '';
//$database = 'bid';

// Create a connection to the database
//$connection = new mysqli($host, $username, $password, $database);

// Check for a connection error
//if ($connection->connect_error) {
 //   die('Connection failed: ' . $connection->connect_error);
//


// Get user input from the login form
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//   $user = $_POST['email'];
 //  $password = $_POST['password'];

//}

// Query the database to check if the user exists
//$query = "SELECT * FROM login WHERE email = '$user' AND pass = '$password'";
//$result = $connection->query($query);

//if ($result->num_rows === 1) {
//    // Authentication successful
//    $response = ['success' => true];
//    header("Location: admin/profile.php");
//} else {
//    // Authentication failed
//    $response = ['success' => false];
//    //header("Location: login.php");
//}





//?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('login-form');
            const errorMessage = document.getElementById('error-message');
            const passwordToggle = document.getElementById('password-toggle');
            const passwordInput = document.getElementById('password');

            passwordToggle.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });

            loginForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const email = loginForm.elements.email.value;
                const password = loginForm.elements.password.value;

                // You can perform client-side validation here.

                // Send the data to the server for verification.
                fetch('login.php', {
                    method: 'POST',
                    body: JSON.stringify({ email, password }),
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = 'dashboard.html'; // Redirect to a success page
                    } else {
                        errorMessage.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
-->

</body>
</html>







  