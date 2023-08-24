<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (!empty($email) && !empty($password)) {
        $search_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($search_query) > 0) {
            $row = mysqli_fetch_assoc($search_query);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        } else {
            echo "Incorrect Credentials!";
        }
    } else {
        echo "All fields are required!";
    }