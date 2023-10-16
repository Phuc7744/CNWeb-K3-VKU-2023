<div class="container py-5">
    <h2>Danh sách giày</h2>

    <div class="row row-cols-1 row-cols-md-4 g-4 py-5">
        <?php
        if (isset($shoes_list)) {
            foreach ($shoes_list as $shoes) { ?>
                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="<?php echo $shoes['img_url'] ?>" class="card-img-top img-fluid " alt="..." />
                        </div>
                        <div class="card-body mt-4 ">
                            <h5 class="card-title">
                                <?php echo strtoupper($shoes['name']) ?>
                            </h5>
                            <h5 class="card-title1">
                                <?php echo $shoes['brand'] . " - " . $shoes['type'] ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $shoes['description'] ?>
                            </p>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="price">
                                        <?php echo number_format($shoes['price'], 0, ".", ",") ?> vnđ
                                    </p>
                                </div>
                                <div>
                                    <i class="bi bi-heart-fill"></i>
                                    <i class="bi bi-bag-check-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        }
        ?>
    </div>
</div>