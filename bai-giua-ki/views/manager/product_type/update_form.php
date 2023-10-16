<form action="?controller=manager&type=product_type&action=update&id=<?php echo $product_type_to_edit['id'] ?>"
    method="post">
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" name="name" value="<?php echo $product_type_to_edit['name'] ?>" required>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
</form>

<a href="?controller=manager&type=product_type&action=list">danh sách</a>