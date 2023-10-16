<form action="?controller=manager&type=shoes&action=update&id=<?php echo $shoes_to_edit['id'] ?>" method="post"
    enctype="multipart/form-data" class="w-50">
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" value="<?php echo $shoes_to_edit['name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="price" value="<?php echo $shoes_to_edit['price'] ?>">
    </div>
    <div class="form-group">
        <label for="">Hãng</label>
        <select name="brand" class="form-control" value=<?php $shoes_to_edit['brand_id'] ?>>
            <?php
            if (isset($brand_list)) {
                foreach ($brand_list as $brand) { ?>
                    <option value=<?php echo $brand['id'] ?> selected=<?php echo $brand['id'] == $shoes_to_edit['id'] ? true : false ?>>
                        <?php echo $brand['name'] ?>
                    </option>
                <?php }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Loại</label>
        <select name="product_type" class="form-control" value=<?php $shoes_to_edit['product_type_id'] ?>>
            <?php
            if (isset($product_type_list)) {
                foreach ($product_type_list as $product_type) { ?>
                    <option value=<?php echo $product_type['id'] ?> selected=<?php echo $product_type['id'] == $shoes_to_edit['id'] ? true : false ?>>
                        <?php echo $product_type['name'] ?>
                    </option>
                <?php }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="text" name="img_url" value="<?php echo $shoes_to_edit['img_url'] ?>" hidden>
        <input type="file" name="img" class="form-control" accept="image/*">
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="description" class="form-control" id="" cols="30"
            rows="10"><?php echo $shoes_to_edit['description'] ?></textarea>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
</form>

<a href="?controller=manager&type=shoes&action=list">danh sách</a>