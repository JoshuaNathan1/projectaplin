<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $host = 'localhost'; 
        $dbname = 'db_chat'; 
        $username_db = 'root'; 
        $password_db = ''; 

        $conn = new mysqli($host, $username_db, $password_db, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo json_encode(array('status' => 'success'));
            $_SESSION['username'] = $username;
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['profile_pic'] = $user['profile_pic']; 
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid username or password'));
        }
        $conn->close();
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Username and password are required'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>
