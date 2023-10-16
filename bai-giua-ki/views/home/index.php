<div class="container">
    <div class="row">
        <ul class="col list-group">
            <h4>Hãng</h4>
            <?php
            if (isset($brand_list)) {
                foreach ($brand_list as $brand) { ?>
                    <li class="list-group-item">
                        <a href="?controller=home&brand=<?php echo $brand['id'] ?>">
                            <?php echo $brand['name'] ?>
                        </a>
                    </li>
                <?php }
            } ?>
        </ul>
        <ul class="col list-group">
            <h4>Loại sản phẩm</h4>
            <?php
            if (isset($product_type_list)) {
                foreach ($product_type_list as $product_type) { ?>
                    <li class="list-group-item">
                        <a href="?controller=home&product_type=<?php echo $product_type['id'] ?>">
                            <?php echo $product_type['name'] ?>
                        </a>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
</div>
<?php
require_once('shoes/list.php');
?>