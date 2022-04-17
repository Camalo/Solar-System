<section id="MarsGallery">
    <div class="container">
        <div class="title-block">
            <h2>Фотографии с марсоходов</h2>
        </div>
        <div class="row">
            <?php foreach ($this->photos as $photo) { ?>
                <div class="col-md-6">
                    <div class="testimonial-box">
                        <h6> Марсоход <?php echo $photo->rover->name; ?> <span class="rating"> <?php echo $photo->rover->status; ?> <i class="icon ion-md-star"></i></span></h6>
                        <small>сделано <?php echo $photo->earth_date; ?></small>
                        <img src="<?php echo $photo->img_src; ?>" class="img-fluid" alt="Demo image">
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="col-lg-4 col-md-4 align-middle marginTop" >
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center pagination-lg">
                    <?php if ($this->currentPage > 1)
                        echo ' <li class="page-item">
                        <a class="page-link my-page-item" href="#" tabindex="-1">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>';
                    ?>


                    <?php

                    $beginningPage = ((int)$this->currentPage > 1) ? (int)$this->currentPage - 1 :  (int)$this->currentPage;

                    echo '<li class="page-item"><a class="page-link my-page-item" href="' . URL . '/marsGallery/marsPhotos/' . $beginningPage . '">' . $beginningPage . '</a></li>';
                    $beginningPage = (int)$beginningPage + 1;
                    echo '<li class="page-item"><a class="page-link my-page-item" href="' . URL . '/marsGallery/marsPhotos/' . $beginningPage . '">' . $beginningPage . '</a></li>';
                    $beginningPage = (int)$beginningPage + 1;
                    echo '<li class="page-item"><a class="page-link my-page-item" href="' . URL . '/marsGallery/marsPhotos/' . $beginningPage . '">' . $beginningPage . '</a></li>';
                    ?>

                    <li class="page-item">
                        <a class="page-link my-page-item" href="#">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>