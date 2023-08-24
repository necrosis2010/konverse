<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $search_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($search_query) > 0) {
                echo "This email already exists!";
            } else {
                $time = time();
                $_id = rand(time(), 100000000);
                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password)
                                VALUES ({$_id}, '{$fname}','{$lname}', '{$email}', '{$password}')");
                if ($insert_query) {
                    $search_query2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if (mysqli_num_rows($search_query2) > 0) {
                        $result = mysqli_fetch_assoc($search_query2);
                        $_SESSION['unique_id'] = $result['unique_id'];
                        echo "success";
                    } else {
                        echo "This email address does not exist!";
                    }
                } else {
                    echo "Something went wrong. Please try again!";
                }
            }
        } else {
            echo "Given email is not valid!";
        }
    } else {
        echo "All are fields required!";
    }