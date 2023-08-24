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
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Konverse</title>
  </head>
  <body>
    <div class="container">
      <div class="chat bg-light p-4">
      <?php
            include_once "../php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET["user_id"]);
            $search_query = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            if (mysqli_num_rows($search_query) > 0) {
                $row = mysqli_fetch_assoc($search_query);
            }
            ?>
        <div class="top-section mb-3">
          <a href="./users.php" class="back"><i class="fas fa-arrow-left"></i></a>
          <i class="far fa-user mx-2"></i>
          <?php
                    echo $row["fname"] . " " . $row["lname"];
                    ?>
        </div>
        <div class="messages-section mb-3 py-3">
        </div>
        <div class="send-section">
          <form class="typing-area" action="#">
            <div class="input-group mb-3">
            <input type="text" name="sender_id" value="<?php echo $_SESSION["unique_id"]; ?>" hidden>
            <input type="text" name="receiver_id" value="<?php echo $user_id ?>" hidden>
              <input
                type="text"
                name="message"
                class="form-control form-control-lg input-field"
                placeholder="Type your message here"
                autocomplete="off"
              />
              <button class="input-group-text send-button btn btn-lg action">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://kit.fontawesome.com/865ad0b00b.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="../ajax/chats.js"></script>
  </body>
</html>
