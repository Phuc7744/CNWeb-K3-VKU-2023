<form action="?controller=manager&type=brand&action=add" method="post" class="w-25">
    <div class="form-group">
        <label for="name">Tên</label>
        <input type="text" class="form-control" name="name" id="name" required />
    </div>
    <div class="form-group">
        <label for="description">Mô tả</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <button type="submit" name="add" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($isSuccess)) {
    if ($isSuccess) {
        echo "<div>Thêm thành công</div>";
    }
}
?>

<a href="?controller=manager&type=brand&action=list">danh sách</a>