<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {username: username, password: password},
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Login successful');
                            window.location.href = 'index.php';
                        } else {
                            alert('Login failed: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while logging in');
                    }
                });
            });

            // Register
            $('#registerForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Registration successful');
                        } else {
                            alert('Registration failed: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while registering: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .container input[type="text"],
        .container input[type="password"],
        .container input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .container a {
            text-decoration: none;
            color: #007bff;
            display: block;
            margin-top: 10px;
        }

        .container a:hover {
            color: #0056b3;
        }

        .container button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" method="post">
            <div style="position: relative;">
                <input type="text" id="username" name="username" placeholder="Username">
                <i class="fas fa-user" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>
            <div style="position: relative;">
                <input type="password" id="password" name="password" placeholder="Password">
                <i class="fas fa-lock" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);"></i>
            </div>
            <input type="submit" value="Login">
        </form>
        <a href="registertemp.php">Don't have an account? Register here</a>
    </div>
</body>
</html>
