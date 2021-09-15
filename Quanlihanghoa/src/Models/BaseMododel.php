<?php
namespace App\Models;

class BaseModel
{
    protected $connect;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->dbConnect = new DBConnect();
        $this->connect = $this->dbConnect->connect();       
    }


    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }
    

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch();
    }

    public function update($id, $data)
    {

    }

    public function store($data)
    {
    
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }


    public function search($keyword){
       
        $sql = "SELECT * FROM $this->table WHERE `name` LIKE '%".$keyword."%'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }
}