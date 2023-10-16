<form action="?controller=manager&type=brand&action=update&id=<?php echo $brand_to_edit['id'] ?>" method="post"
    class="w-50">
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" value="<?php echo $brand_to_edit['name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Mô tả thương hiệu</label>
        <textarea class="form-control" name="description" id="" cols="30"
            rows="10"><?php echo $brand_to_edit['description'] ?></textarea>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
</form>

<a href="?controller=manager&type=brand&action=list">danh sách</a>