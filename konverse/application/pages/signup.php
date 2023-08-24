<?php
    session_start();
    if(isset($_SESSION["unique_id"])) {
        header("location: ./users.php");
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
        <div class="sign-up-form py-3 px-5 bg-light">
            <header class="fs-3 section-title text-center">Sign up today!</header>
            <hr />
            <div class="error-text text-center text-danger fs-5">
                <i class="fas fa-exclamation-circle me-2"></i>This is an error
                message!
            </div>
            <form>
                <div class="fields my-3">
                    <div class="name-details">
                        <div class="mb-3 name-field">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="fname" class="form-control form-control-lg"
                                placeholder="Enter your name" required />
                        </div>
                        <div class="mb-3 name-field">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" name="lname" class="form-control form-control-lg"
                                placeholder="Enter your surname" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="Enter your email" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg"
                            placeholder="Enter a password" required />
                    </div>

                </div>
                <button type="submit" class="btn w-100 btn-lg my-3 d-grid action">
                    Register
                </button>

                <div class="help-text text-center text-muted">
                    <p class="d-block mb-1">
                        Already a member?<a href="./login.php" class="link">&nbsp;Login here</a>
                    </p>
                    <p class="d-block">
                        Back to
                        <a href="../../landing/html/index.html" class="link">Home</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/865ad0b00b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../ajax/signup.js"></script>
</body>

</html>