<?php

namespace App\Models;

class Sell_goodsModel extends BaseModel
{
    protected $table = "sell_goods";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `sell_goods`( `product_code`, `Product_name`, `Sectors`,`Price`, `Quantity`, `Date_created`,`Item_Description`)
        VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['Product_name']);
        $stmt->bindParam(3, $data['Sectors']);
        $stmt->bindParam(4, $data['Price']);
        $stmt->bindParam(5, $data['Quantity']);
        $stmt->bindParam(6, $data['Date_created']);
        $stmt->bindParam(7, $data['Item_Description']);
        $stmt->execute();
        
    }


    public function update($id, $data)
    {
        $sql = "UPDATE `sell_goods` SET `product_code`=?,`Product_name`=?,`Sectors`=?,`Price`=?,`Quantity`=?,`Date_created`=?,`Item_Description`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['Product_name']);
        $stmt->bindParam(3, $data['Sectors']);
        $stmt->bindParam(4, $data['Price']);
        $stmt->bindParam(5, $data['Quantity']);
        $stmt->bindParam(6, $data['Date_created']);
        $stmt->bindParam(7, $data['Item_Description']);
        $stmt->execute();
    }


   



}
