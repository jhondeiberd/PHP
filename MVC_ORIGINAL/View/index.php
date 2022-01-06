<?php
require_once "../Model/UserDB.php";
require_once("head.php") ;
$userDB = new UserDB();
const IMG_PATH = './assets/img/';
const image = 'image';
const userName = 'userName';
const firstName = 'firstName';
const lastName = 'lastName';
const age = 'age';
const maritalState = 'maritalState';
const message = 'message';
const status = 'status';

?> 
<br><br><br><br><br>
<h1><strong>Log in to view profiles</strong></h1>

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Explore</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <?php
            if (isset($_POST['busqueda'])) {
                $busqueda = $_POST['busqueda'];

                $picture = ($userDB->getAllUsers());
                foreach ($picture as $date => $values) {
                    if ($busqueda == $values[firstName]) {

                        $file = IMG_PATH . $values[image];
                        $fullName = $values[firstName] ." ". $values[lastName];
                        $age = $values[age];
                        $idU = $values['idUser'];
                        ?>
                        <div class="col-md-2 col-lg-4 mb-5">
                            <div class="portfolio-item mx-100 h-100" data-bs-toggle="modal" data-bs-target="#profile_<?=$idU?>">

                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-white d-flex align-items-center justify-content-around w-50">
                                        <?=$values[age]?>
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>

                                <img class="imagen-portafolio" src='<?=$file?>'/>

                            </div>
                        </div>


                        <?php
                        include 'templates/modal_index.php';}

                }
            }

            if(!isset($_POST['busqueda']) or $_POST['busqueda'] == ""){
                $picture = ($userDB->getAllUsers());
                foreach ($picture as $date => $values) {
                    $file = IMG_PATH . $values[image];
                    $fullName = $values[firstName] ." ". $values[lastName];
                    $age = $values[age];
                    $idU = $values['idUser'];
                    ?>
                    <div class="col-md-2 col-lg-4 mb-5">
                        <div class="portfolio-item mx-100 h-100" data-bs-toggle="modal" data-bs-target="#profile_<?=$idU?>">

                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-white d-flex align-items-center justify-content-around w-50">
                                    <?=$values[age]?>
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>

                            <img class="imagen-portafolio" src='<?=$file?>'/>

                        </div>
                    </div>


                    <?php
                    include 'templates/modal_index.php'
                    ?>

                <?php
                }
            }

            ?>
        </div>
    </div>
</section>
<?php require_once("footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>