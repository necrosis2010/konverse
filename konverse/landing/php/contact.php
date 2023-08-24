
<?php
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["name"];
  $name_err = "";
  $email_err = "";
  if(isset($name) && !preg_match("/^([a-zA-Z' ]+)$/",$name)) {
    $nameErr= "Given name is not valid";
  }
  if(isset($email) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
    $emailErr= "Given email is not valid";
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="../../shared/favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/landing.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../javascript/script.js
    "></script>
    <title>Konverse</title>
  </head>
  <body class="contact-body">
    <header>
      <nav
        class="
          navbar navbar-expand-lg
          fixed-top
          navbar-light
          bg-light
          primary-bg
          py-4
        "
      >
        <div class="container-fluid">
          <a class="navbar-brand ms-5 light-text" href="#"
            ><img
              src="../images/logo.png"
              alt="konverse-logo"
              width="45"
              height="40"
              class="mx-2"
            />Konverse</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
              <li class="nav-item">
                <a class="nav-link light-text" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link light-text" href="./about.html">About</a>
              </li>
              <button type="button" class="light-text btn sign-up">
                Sign Up
              </button>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container-fluid">
        <form class="px-5" action="./contact.php" method="POST">
          <div class="contact-form p-5">
          <?php 
              if($nameErr !== "") {
                echo "<div class=\"error-text text-center text-danger fs-4 bg-light\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>".$nameErr."
              </div>";
              }
              else if($emailErr !== "") {
                echo "<div class=\"error-text text-center text-danger fs-4 bg-light\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>".$emailErr."
              </div>";
              }
            ?>
            <div class="mb-3 px-5">
              <label for="message" class="form-label light-text">Name</label>
              <input
                type="text"
                name="name"
                class="form-control form-control-lg fs-3"
                placeholder="Enter your name"
                required
              />
            </div>
            <div class="mb-3 px-5">
              <label for="email" class="form-label light-text">Email</label>
              <input
                type="email"
                name="email"
                class="form-control form-control-lg fs-3"
                placeholder="Enter your email"
                required
              />
            </div>
            <div class="mb-3 px-5">
              <label for="message" class="form-label light-text">Message</label>
              <textarea
                name="message"
                class="form-control fs-3 form-control-lg"
                rows="4"
                placeholder="Enter your message here"
                required
              ></textarea>
            </div>
            <div class="form-button text-center mt-4 pb-5">
              <button
                class="btn btn-lg light-text contact-submit"
                type="submit"
              >
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </main>

    <footer class="p-3 light-text text-center">
      <div class="social-links my-3">
        <i class="fab fa-facebook mx-4 fa-2x"></i>
        <i class="fab fa-twitter mx-4 fa-2x"></i>
        <i class="fab fa-instagram mx-4 fa-2x"></i>
      </div>
      <div class="copyright secondary-text p-2">
        Copyright &copy; 2021, Konverse LLC
      </div>
    </footer>

    <script
      src="https://kit.fontawesome.com/865ad0b00b.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="../javascript/script.js"></script>
  </body>
</html> 
