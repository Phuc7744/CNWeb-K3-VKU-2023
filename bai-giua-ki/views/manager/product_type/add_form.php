<form action="?controller=manager&type=product_type&action=add" method="post" class="w-50">
    <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" required>
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

<a href="?controller=manager&type=product_type&action=list">danh sách</a>