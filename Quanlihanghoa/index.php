<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$page = isset($_GET['page']) ? $_GET['page'] : "";

$sell_goodsController = new Controllers\Sell_goodsController();

include "src/Views/layout/header.php";
switch ($page) {
    case "sell_goods-list":
        if(isset($_GET['search'])){
            $sell_goodsController->search($_GET['search']);
        } else {
            $sell_goodsController->index();
        }
        break;

    case "sell_goods-create":
        $sell_goodsController->store();
        break;
    case "sell_goods-delete":
        $id = $_GET['id'];
        $sell_goodsController->delete($id);
        break;
    case "sell_goods-update":
        $id = $_GET['id'];
        $sell_goodsController->update($id);
        break;

}


include "src/Views/layout/footer.php";

?>