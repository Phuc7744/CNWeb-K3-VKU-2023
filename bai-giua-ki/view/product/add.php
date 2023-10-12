<form class="add-product-form" action="ProductController.php" method="post">
    <h1 class="form-title">Thêm sản phẩm</h1>
    <div>
        <label for="product-name"><strong>Tên sản phẩm</strong></label>
        <input type="text" placeholder="Tên sản phẩm" name="product-name" required>

        <label for="product-price"><strong>Giá</strong></label>
        <input type="text" placeholder="Giá" name="product-price" required>

        <label for="product-type"><strong>Loại</strong></label>
        <select name="product-type" id="product-type">
            <?php foreach ($product_types as $type) { ?>
                <option value=<?php echo strval($type['name']) ?>><?php echo $type['name'] ?></option>
            <?php } ?>
        </select>

        <label for="product-price"><strong>Ảnh sản phẩm</strong></label>
        <button>Chọn ảnh</button>
    </div>
    <button type="submit">Add</button>
</form>