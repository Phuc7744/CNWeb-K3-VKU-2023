<div>
    <h3>Danh sách loại sản phẩm</h3>
    <a href="?controller=manager&type=product_type&action=add">Thêm loại sản phẩm</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($product_type_list)) {
                foreach ($product_type_list as $product_type) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $product_type['id'] ?>
                        </th>
                        <td>
                            <?php echo $product_type['name'] ?>
                        </td>
                        <td>
                            <form action="?controller=manager&type=product_type&action=delete" method="post">
                                <input type="text" name="id" value="<?php echo $product_type['id'] ?>" hidden>
                                <button type="submit" name="delete">Xóa</button>
                            </form>
                        </td>
                        <td>
                            <button>
                                <a style="text-decoration: none;"
                                    href="?controller=manager&type=product_type&action=update&id=<?php echo $product_type['id'] ?>">Sửa</a>
                            </button>
                        </td>
                    </tr>

                <?php }
            }
            ?>
        </tbody>

    </table>
</div>