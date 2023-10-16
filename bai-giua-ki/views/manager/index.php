<ul>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><a href="?controller=manager&type=brand&action=list">Thương hiệu</a></li>
        <li class="list-group-item"><a href="?controller=manager&type=product_type&action=list">Loại sản phẩm</a></li>
        <li class="list-group-item"><a href="?controller=manager&type=shoes&action=list">Giày</a></li>
    </ul>
    <div>
        <?php
        $type = isset($_GET['type']) ? $_GET['type'] : "shoes";
        $action = isset($_GET['action']) ? $_GET['action'] : "list";
        switch ($type) {
            case "brand":
                switch ($action) {
                    case "list":
                        require_once('brand/list.php');
                        break;
                    case "add":
                        require_once('brand/add_form.php');
                        break;
                    case "update":
                        require_once('brand/update_form.php');
                        break;
                    default:
                        require_once('brand/list.php');
                        break;
                }
                break;
            case "product_type":
                switch ($action) {
                    case "list":
                        require_once('product_type/list.php');
                        break;
                    case "add":
                        require_once('product_type/add_form.php');
                        break;
                    case "update":
                        require_once('product_type/update_form.php');
                        break;
                    default:
                        require_once('product_type/list.php');
                        break;
                }
                break;
            case "shoes":
                switch ($action) {
                    case "list":
                        require_once('shoes/list.php');
                        break;
                    case "add":
                        require_once('shoes/add_form.php');
                        break;
                    case "update":
                        require_once('shoes/update_form.php');
                        break;
                    default:
                        require_once('shoes/list.php');
                        break;
                }
                break;
        }
        ?>
    </div>
</ul>