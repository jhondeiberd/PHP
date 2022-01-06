<?php
require_once "../Model/UserDB.php";
require_once("head2.php");
$userDB = new UserDB();

if($_POST){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $member = $_POST['member'];

    $date = new DateTime();
    $image = $date->getTimestamp()."_".$_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,"View/assets/img/".$image);

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $maritalState = $_POST['maritalState'];
    $message = $_POST['message'];
    $userDB->singUpUser($userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member);
}

?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FinalProjectPHP</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <section class="page-section" id="contact">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sign Up</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form data-sb-form-api-token="API_TOKEN" action="newUser.php" method="post" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                           <input class="form-control" id="image" name="image" type="file" placeholder="Enter your image..." data-sb-validations="required" />
                           <label for="Image">Image</label>
                            <div class="invalid-feedback" data-sb-feedback="image:required">An Image is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="userName" name="userName" type="text" placeholder="Enter your user name..." data-sb-validations="required" />
                            <label for="User name">User name</label>
                            <div class="invalid-feedback" data-sb-feedback="userName:required">An User name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="password" type="password" placeholder="New password" data-sb-validations="required" />
                            <label for="Password">Password</label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="firstName" name="firstName" type="text" placeholder="Enter your Fist name..." data-sb-validations="required" />
                            <label for="First name">First name</label>
                            <div class="invalid-feedback" data-sb-feedback="firstName:required">A First name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="lastName" name="lastName" type="text" placeholder="Enter your Last name..." data-sb-validations="required" />
                            <label for="Last name">Last name</label>
                            <div class="invalid-feedback" data-sb-feedback="lastName:required">A Last name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(+1) 456-7890" />
                            <label for="phone">Phone number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" list="ages" name="age" placeholder="Enter your age's range..." id="age" data-sb-validations="required">
                            <datalist id="ages">
                                <option value="18-25">
                                <option value="26-35">
                                <option value="36-45">
                                <option value="46-...">
                            </datalist>
                            <label for="ages">Choose your age's range:</label>
                            <div class="invalid-feedback" data-sb-feedback="age:required">An Age's range is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" list="genders" name="gender" placeholder="Enter your gender..." id="gender" data-sb-validations="required">
                            <datalist id="genders">
                                <option value="Male">
                                <option value="Female">
                            </datalist>
                            <label for="gender">Choose your gender:</label>
                            <div class="invalid-feedback" data-sb-feedback="gender:required">A Gender is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" list="members" name="member" placeholder="Choose the type of membership" id="member" data-sb-validations="required">
                            <datalist id="members">
                                <option value="Regular">
                                <option value="Premium">
                            </datalist>
                            <label for="member">Choose the type of membership:</label>
                            <div class="invalid-feedback" data-sb-feedback="member:required">The type of membership is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" list="maritalStatus" name="maritalState" placeholder="Enter your marital status..." id="maritalState" data-sb-validations="required">
                            <datalist id="maritalStatus">
                                <option value="Single">
                                <option value="Divorced">
                                <option value="Married">
                                <option value="Complicated_relationship">
                                <option value="Reserved">
                            </datalist>
                            <label for="maritalState">Choose your marital status:</label>
                            <div class="invalid-feedback" data-sb-feedback="maritalState:required">A Marital status is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" ></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <input class="btn btn-primary btn-xl" id="submitButton" name="singup" type="submit" value="Sing up">
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->
</body>
</html>
<?php include("footer.php") ?>

