<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FinalProjectPHP</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Log in</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <form action="session.php" method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeUser" name="userName" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="typeEmailX">User name</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button><br><br>
                            </form>
                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>
                        </div>
                        <div>
                            <p class="mb-0">Don't have an account? <a href="newUser.php" class="text-white-50 fw-bold">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script></script>
</body>
</html>
