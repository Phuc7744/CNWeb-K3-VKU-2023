<div>
    <h3>Danh sách thương hiệu</h3>
    <a href="?controller=manager&type=brand&action=add">Thêm thương hiệu</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Mô tả</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($brand_list)) {
                foreach ($brand_list as $brand) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $brand['id'] ?>
                        </th>
                        <td>
                            <?php echo $brand['name'] ?>
                        </td>
                        <td scope="row">
                            <?php echo $brand['description'] ?>
                        </td>
                        <td>
                            <form action="?controller=manager&type=brand&action=delete" method="post">
                                <input type="text" name="id" value="<?php echo $brand['id'] ?>" hidden>
                                <button type="submit" name="delete">Xóa</button>
                            </form>
                        </td>
                        <td scope="row">
                            <button>
                                <a style="text-decoration: none;"
                                    href="?controller=manager&type=brand&action=update&id=<?php echo $brand['id'] ?>">Sửa</a>
                            </button>
                        </td>
                    </tr>

                <?php }
            }
            ?>
        </tbody>

    </table>
</div>