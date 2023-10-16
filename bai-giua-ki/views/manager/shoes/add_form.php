<form action="?controller=manager&type=shoes&action=add" method="post" enctype="multipart/form-data" class="w-50">
    <div class="form-group">
        <label for="name">Tên</label>
        <input type="text" class="form-control" name="name" id="name" required />
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="text" class="form-control" name="price" required>
    </div>
    <div class="form-group">
        <label for="">Hãng</label>
        <select name="brand" class="form-control" value=<?php echo $shoes_to_edit['brand_id'] ?>>
            <?php
            if (isset($brand_list)) {
                foreach ($brand_list as $brand) { ?>
                    <option value=<?php echo $brand['id'] ?>>
                        <?php echo $brand['name'] ?>
                    </option>
                <?php }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Loại</label>
        <select name="product_type" class="form-control" value=<?php echo $shoes_to_edit['product_type_id'] ?>>
            <?php
            if (isset($product_type_list)) {
                foreach ($product_type_list as $product_type) { ?>
                    <option value=<?php echo $product_type['id'] ?>>
                        <?php echo $product_type['name'] ?>
                    </option>
                <?php }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" name="img" class="form-control" accept="image/*" required>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Thêm</button>
</form>

<?php
if (isset($isSuccess)) {
    if ($isSuccess) {
        echo "<div>Thêm thành công</div>";
    }
}
?>

<a href="?controller=manager&type=shoes&action=list">danh sách giày</a>