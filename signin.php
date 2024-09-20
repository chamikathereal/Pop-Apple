<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Pop Apple - Sign In</title>
    <link rel="icon" href="img/images/favicon.png" />
    <style>
        /* Additional Styling */
        .mainbody {
            background-color: #f5f5f5;
        }

        .signin-container {
            background-color: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .signinBtn {
            width: 100%;
            background-color: #7c20c1;
            border-color: #7c20c1;
        }

        .signinBtn:hover {
            background-color: #065f5b;
            border-color: #065f5b;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .form-text {
            font-size: 0.9rem;
        }

        .image-side {
            background-image: url('img/images/Signinpageimg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="mainbody">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-none d-md-block image-side"></div>
            <div class="col-md-6 d-flex justify-content-center align-items-center vh-100">
                <div class="signin-container">
                    <h1 style="color: #7c20c1;" class="mb-4 text-center fw-bold">Hey There!</h1>
                    <h4 class="mb-3 text-center">Sign In</h4>
                    <form>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <a type="button" href="index.php" class="btn btn-primary signinBtn">Sign In</a>
                        <h6 class="mb-0 mt-3 text-center">Don't have an account? <a href="signup.php">Sign Up</a></h6>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
