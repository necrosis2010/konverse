<?php
    session_start();
    if(isset($_SESSION["unique_id"])) {
        include_once "config.php";
        $sender_id = mysqli_real_escape_string($conn, $_POST["sender_id"]);
        $receiver_id = mysqli_real_escape_string($conn, $_POST["receiver_id"]);

        $output = "";
        $search_query = "SELECT * FROM messages 
                         LEFT JOIN users ON users.unique_id = messages.sender_id
                         WHERE (sender_id = {$sender_id} AND receiver_id = {$receiver_id})
                         OR (sender_id = {$receiver_id} AND receiver_id = {$sender_id}) 
                         ORDER BY message_id";
        $query = mysqli_query($conn, $search_query);

        if(mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                if($row["sender_id"] === $sender_id) {
                    $output .= "<div class=\"user-message p-2 m-2 text-end\">". $row["message"] ."</div>";
                } else {
                    $output .= "<div class=\"friend-message p-2 m-2\">". $row["message"] ."</div>";
                }
            }
            echo $output;
        }
    } else {
        header("../pages/login.php");
    }
?>