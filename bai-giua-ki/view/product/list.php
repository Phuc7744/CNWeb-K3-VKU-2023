<?php foreach ($product_lists as $list) { ?>
    <div class="product-list">
        <h1>List
            <?php echo $list['type'] ?>
        </h1>
        <ul class="product-line">
            <?php if (count($list['products']) != 0) {
                foreach ($list['products'] as $product) { ?>
                    <li>
                        <?php echo $product['id'] ?>
                    </li>
                    <li>
                        <?php echo $product['name'] ?>
                    </li>
                    <li>
                        <?php echo $product['type'] ?>
                    </li>
                    <li>
                        <?php echo $product['price'] ?>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
<?php } ?>