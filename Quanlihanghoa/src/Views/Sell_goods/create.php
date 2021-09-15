<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW SellGoods
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="sell_goods-product_code">mã sản phẩm</label>
                    <input type="text" class="form-control" id="sell_goods-product_code" name = "product_code" placeholder="Enter product_code">
                </div>

                <div class="form-group">
                    <label for="sell_goods-Product_name">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="sell_goods-Product_name" name="Product_name" placeholder="Enter Product_name">
                </div>

                <div class="form-group">
                    <label for="sell_goods-Sectors">thể loại</label>
                    <input type="text" class="form-control" id="sell_goods-Sectors" name="Sectors" placeholder="Enter Sectors">
                </div>

                <div class="form-group">
                    <label for="sell_goods-Price">Giá bán</label>
                    <textarea type="text" class="form-control" id="sell_goods-Price" name="Price" placeholder="Enter Price"></textarea>
                </div>
                <div class="form-group">
                    <label for="sell_goods-Quantity">Số lượng</label>
                    <textarea type="text" class="form-control" id="sell_goods-Quantity" name="Quantity" placeholder="Enter Quantity"></textarea>
                </div> <div class="form-group">
                    <label for="sell_goods-Date_created">Ngày tạo</label>
                    <textarea type="text" class="form-control" id="sell_goods-Date_created" name="Date_created" placeholder="Enter Date_created"></textarea>
                </div> <div class="form-group">
                    <label for="sell_goods-desc">Mô tả món hàng</label>
                    <textarea type="text" class="form-control" id="sell_goods-Item_Description" name="Item_Description" placeholder="Enter Item_Description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=book-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
		