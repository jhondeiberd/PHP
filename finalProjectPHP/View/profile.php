<?php
session_start();
require_once "../Model/UserDB.php";
require_once("head.php");
$userDB = new UserDB();
$userName = $_SESSION['userName'];

$infoUser = $userDB->getUserInfo($userName);

$passwordold = $infoUser[0]['password'];
$firstNameold = $infoUser[0]['firstName'];
$lastNameold = $infoUser[0]['lastName'];
$emailold = $infoUser[0]['email'];
$memberold = $infoUser[0]['member'];
$phoneold = $infoUser[0]['phone'];
$ageold = $infoUser[0]['age'];
$genderold = $infoUser[0]['gender'];
$maritalStateold = $infoUser[0]['maritalState'];

if($_POST){
    $userName = $_SESSION['userName'];
    $password = $_POST['password'];
    $member = $_POST['member'];

    $date = new DateTime();
    $image = $date->getTimestamp()."_".$_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,"assets/img/".$image);

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $maritalState = $_POST['maritalState'];
    $message = $_POST['message'];
    echo $userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member;
    $userDB->updateUserInfo($userName, $password, $firstName, $lastName, $image, $email, $phone, $age, $gender, $maritalState, $message, $member);
}

?>
<br><section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edit profile</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form data-sb-form-api-token="API_TOKEN" action="" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="image" name="image" type="file" data-sb-validations="required" />
                        <label for="Image">Image</label>
                        <div class="invalid-feedback" data-sb-feedback="image:required">An Image is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" name="password" type="password" value="<?=$passwordold?>" data-sb-validations="required" />
                        <label for="Password">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="firstName" name="firstName" type="text" value="<?=$firstNameold?>" data-sb-validations="required" />
                        <label for="First name">First name</label>
                        <div class="invalid-feedback" data-sb-feedback="firstName:required">A First name is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="lastName" name="lastName" type="text" value="<?=$lastNameold?>" data-sb-validations="required" />
                        <label for="Last name">Last name</label>
                        <div class="invalid-feedback" data-sb-feedback="lastName:required">A Last name is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" value="<?=$emailold?>" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" value="<?=$phoneold?>" />
                        <label for="phone">Phone number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" list="ages" name="age" value="<?=$ageold?>" id="age" data-sb-validations="required">
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
                        <input class="form-control" list="genders" name="gender" value="<?=$genderold?>" id="gender" data-sb-validations="required">
                        <datalist id="genders">
                            <option value="Male">
                            <option value="Female">
                        </datalist>
                        <label for="gender">Choose your gender:</label>
                        <div class="invalid-feedback" data-sb-feedback="gender:required">A Gender is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" list="members" name="member" value="<?=$memberold?>" id="member" data-sb-validations="required">
                        <datalist id="members">
                            <option value="Regular">
                            <option value="Premium">
                        </datalist>
                        <label for="member">Choose the type of membership:</label>
                        <div class="invalid-feedback" data-sb-feedback="member:required">The type of membership is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" list="maritalStatus" name="maritalState" value="<?=$maritalStateold?>" id="maritalState" data-sb-validations="required">
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
                        <textarea class="form-control" id="message" name="message" type="text" style="height: 10rem" ></textarea>
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
                    <input class="btn btn-primary btn-xl" id="submitButton" name="singup" type="submit" value="Update profile">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php include("footer.php") ?>
