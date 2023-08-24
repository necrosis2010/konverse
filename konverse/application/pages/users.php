<?php
    session_start();
    if (!isset($_SESSION["unique_id"])) {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Konverse</title>
</head>

<body>
    <div class="container">
        <div class="users bg-light p-4">
            <?php
            include_once "../php/config.php";
            $search_query = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($search_query) > 0) {
                $row = mysqli_fetch_assoc($search_query);
            }
            ?>
            <div class="user-options d-flex">
                <div class="user-details">
                    <i class="fas fa-user me-2"></i>
                    <span class="active-user">
                    <?php
                    echo $row["fname"] . " " . $row["lname"];
                    ?></span>
                </div>
                <button class="btn btn-lg light-text">
                    <a href="../php/logout.php?logout_id=<?php echo $row["unique_id"]?>" class="logout">Logout</a>
                </button>
            </div>
            <hr />
            <div class="users-list">
                
            </div>
            <div class="help-text text-center text-muted">
                <p class="d-block my-1">Click on a user to start chatting.</p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/865ad0b00b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../ajax/users.js"></script>
</body>

</html>