<?php
namespace App\Controllers;

use App\Models\Sell_goodsModel;

class Sell_goodsController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new Sell_goodsModel();
        parent::__construct($this->model);
    }
    

    public function index(){
        $sell_goods = parent::index();
        include "src/Views/Sell_goods/list.php";
        
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Sell_goods/create.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "product_name" => $_POST["product_name"],
                "Sector" => $_POST["Sector"],
                "Price" => $_POST["Price"],
                "Quantity" => $_POST["Quantity"],
                "Date_created" => $_POST["Date_created"],
                "Item_Description" => $_POST["Item_Description"]	

            ];
            $this->model->create($data);
            echo '<script type="text/javascript"> alert("Thêm thành công"); window.location.href = "index.php"  </script>';
        }
        
    }

    public function delete($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $sell_goods = $this->model->getById($id);
            include "src/Views/Sell_goods/delete.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "product_name" => $_POST["product_name"],
                "Sector" => $_POST["Sector"],
                "Price" => $_POST["Price"],
                "Quantity" => $_POST["Quantity"],
                "Date_created" => $_POST["Date_created"],
                "Item_Description" => $_POST["Item_Description"]	
            ];
            $this->model->delete($id);
            echo '<script type="text/javascript"> alert("Xóa thành công"); window.location.href = "index.php"  </script>';
        }
    }


    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $sell_goods = $this->model->getById($id);
            include "src/Views/Sell_goods/update.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "product_name" => $_POST["product_name"],
                "Sector" => $_POST["Sector"],
                "Price" => $_POST["Price"],
                "Quantity" => $_POST["Quantity"],
                "Date_created" => $_POST["Date_created"],
                "Item_Description" => $_POST["Item_Description"]	

            ];
            $this->model->update($id, $data);
            echo '<script type="text/javascript"> alert("Sửa thành công"); window.location.href = "index.php"  </script>';
        }
    }


    public function search($keyword){
        $sell_goods = $this->model->search($keyword);
        include "src/Views/Sell_goods/list.php";
    }

}