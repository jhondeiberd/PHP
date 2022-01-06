<div class="portfolio-modal modal fade" id="profile_<?=$idU?>" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-papa">
        <div class="modal-content  modal-altura">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5 contenido-modal-modal">
                <div class="row">
                    <div class="container contenido-modal">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h1 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?=$fullName?></h1>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 datos-modal">
                                        <div class="imagen-modal"><img class="" src='<?=$file?>'></div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Relationship: <?=$values[maritalState]?></h2><br>
                                        <?php
                                        $variable = <<<EOD
                                        I am $fullName,
                                        my range's age is: $age
                                        EOD
                                        ?>
                                        <h4 class="mb-4"><?=$variable?><br><br></h4>
                                        <h2><pre><?=$values[message]?></pre></h2>
                                        <p class="mb-4">
                                            <input class="btn btn-primary" type="submit" value="Close Window" onclick="location='index.php'"/>
                                            <input class="btn btn-primary" type="submit" value="Chat me" onclick="location='home.php'"/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>