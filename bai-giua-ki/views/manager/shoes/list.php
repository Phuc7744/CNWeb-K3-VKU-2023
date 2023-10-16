<div>
    <h3>Danh sách giày</h3>
    <a href="?controller=manager&type=shoes&action=add">Thêm giày</a>
    <table class="table table-hover table-fixed">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Hãng</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($shoes_list)) {
                foreach ($shoes_list as $shoes) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $shoes['id'] ?>
                        </th>
                        <td>
                            <?php echo $shoes['name'] ?>
                        </td>
                        <td>
                            <?php echo number_format($shoes['price'], 0, ".", ",") ?>
                        </td>
                        <td>
                            <?php echo $shoes['brand'] ?>
                        </td>
                        <td>
                            <?php echo $shoes['type'] ?>
                        </td>
                        <td class="col-xs-5 col-sm-1 ">
                            <img src="<?php echo $shoes['img_url'] ?>" class="img-fluid img-thumbnail">
                        </td>
                        <td>
                            <?php echo $shoes['description'] ?>
                        </td>
                        <td>
                            <form action="?controller=manager&type=shoes&action=delete" method="post">
                                <input type="text" name="id" value="<?php echo $shoes['id'] ?>" hidden>
                                <button type="submit" name="delete">Xóa</button>
                            </form>
                        </td>
                        <td>
                            <button>
                                <a style="text-decoration: none;"
                                    href="?controller=manager&type=shoes&action=update&id=<?php echo $shoes['id'] ?>">Sửa</a>
                            </button>
                        </td>
                    </tr>

                <?php }
            }
            ?>
        </tbody>
    </table>
</div>