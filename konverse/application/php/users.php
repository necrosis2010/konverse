<?php
    session_start();
    include_once "config.php";
    $sender_id = $_SESSION['unique_id'];
    $search_query = mysqli_query($conn,"SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($search_query) == 1){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($search_query) > 0){
       while ($row = mysqli_fetch_assoc($search_query)) {
            
            $output .= "<a class=\"d-block user-link mb-3\" style=\"color: #333333\" href=\"../pages/chats.php?user_id=".$row["unique_id"].
            "\"><div class=\"user mb-3 border-bottom\">
                    <i class=\"far fa-user me-2\"></i>"
                    .$row["fname"] . " " . $row["lname"] .
            "</div></a>";
       }
    }
    echo $output;
?>  