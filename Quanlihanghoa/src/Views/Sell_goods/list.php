
<div class="container mt-5">
<div class="card" >
  <div class="card-header">
    SellGoods List
  </div>
  <div class="card-body">
    <a href="index.php?page=sell_goods-create" type="button" class="btn btn-primary mb-3">Add New SellGoods</a>
    
   
  <table class="table">
  <thead>



    <tr>
      <th scope="col">STT</th>
      <th scope="col">mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">thể loại</th>
      <th scope="col">Giá bán</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Mô tả món hàng</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($sell_goods as $sell_goods): ?>
    <tr>
      <th><?php echo $sell_goods['id'] ?></th>
      <td><?php echo $sell_goods['product_code'] ?></td>
      <td><?php echo $sell_goods['Product_name'] ?></td>
      <td><?php echo $sell_goods['Sectors'] ?></td>
      <th><?php echo $sell_goods['Price'] ?></th>
      <th><?php echo $sell_goods['Quantity'] ?></th>
      <th><?php echo $sell_goods['Date_created'] ?></th>
      <th><?php echo $sell_goods['Item_Description'] ?></th>
      <td><a href="index.php?page=book-update&id=<?php echo $sell_goods['id']?>" type="button" class="btn btn-warning">Edit</a></td>
     <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=book-delete&id=<?php echo $sell_goods['id']?>" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
</div>     
 