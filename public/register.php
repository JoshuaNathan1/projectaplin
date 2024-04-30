<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_FILES['profile_pic'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $profile_pic = $_FILES['profile_pic'];

        if (empty($username) || empty($name) || empty($password) || empty($profile_pic['name'])) {
            echo json_encode(array('status' => 'error', 'message' => 'All fields are required'));
            exit();
        }

        $allowed_extensions = array('jpg', 'jpeg', 'png');
        $file_extension = strtolower(pathinfo($profile_pic['name'], PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid file format. Please upload an image file (.jpg/.jpeg/.png)'));
            exit();
        }

        if ($profile_pic['size'] > 1 * 1024 * 1024) { // 1 MB
            echo json_encode(array('status' => 'error', 'message' => 'Profile picture exceeds 1MB limit'));
            exit();
        }

        $upload_dir = 'uploads/';
        $profile_pic_path = $upload_dir . $profile_pic['name'];
        if (!move_uploaded_file($profile_pic['tmp_name'], $profile_pic_path)) {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to upload profile picture'));
            exit();
        }

        $host = "localhost";
        $username_db = 'root';
        $password_db = '';
        $dbname = "db_chat"; 

        $conn = new mysqli($host, $username_db, $password_db, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (username, name, password, profile_pic) VALUES ('$username', '$name', '$password', '$profile_pic_path')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('status' => 'success'));
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to register user: ' . $conn->error));
        }
        $conn->close();
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'All fields are required'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>
