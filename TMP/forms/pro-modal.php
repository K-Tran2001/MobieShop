<?php include './loadFK.php' ?>
<!--Modal add--> 
<div class="modal fade" id="New" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel">Add a new Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="product_code_insert" >Product Code</label>
                    <input type="text"  class="form-control" id="product_code_insert" name="product_code_insert" placeholder="Product Code" >
                </div>

                <div class="col-auto">
                    <label for="name_insert" >Product Name</label>
                    <input type="text"  class="form-control" id="name_insert" name="name_insert" placeholder="Product Name" >
                </div>

                <div class="col-auto">
                    <label for="img_insert" >Product Img</label>
                    <input type="file"  class="form-control" id="img_insert" name="img_insert" placeholder="Product Img" >
                </div>

                <div class="col-auto">
                    <label for="description_insert" >Description</label>
                    <textarea row="3" type="text"  class="form-control" id="description_insert" name="description_insert" placeholder="Description" ></textarea>
                </div>

                <div class="col-auto">
                    <label for="qty_stock_insert" >Quantity Stock</label>
                    <input type="number"  class="form-control" id="qty_stock_insert" name="qty_stock_insert" placeholder="Quantity Stock" >
                </div>

                <div class="col-auto">
                    <label for="on_hand_insert" >On Hand</label>
                    <input type="text"  class="form-control" id="on_hand_insert" name="on_hand_insert" placeholder="On Hand" >
                </div>

                <div class="col-auto">
                    <label for="price_insert" >Price</label>
                    <input type="number"  class="form-control" id="price_insert" name="price_insert" placeholder="Price" >
                </div>

                <div class="col-auto">
                    <label for="category_id_insert" >Category</label>
                    <select id="category_id_insert" name="category_id_insert" class="form-control">
                        <?php 
                        loadCategory();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="supplier_id_insert" >Supplier</label>
                    <select id="supplier_id_insert" name="supplier_id_insert" class="form-control">
                        <?php 
                        loadSupplier();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="date_stock_in_insert" >Date Stock In</label>
                    <input type="date"  class="form-control" id="date_stock_in_insert" name="date_stock_in_insert" placeholder="Date Stock In" >
                </div>

                


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="Add">Save</button>
                </div>
            </form>
                
                
                
        </div>
        
    </div>
</div>
</div>
<!--Modal Edit-->
<div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-warning">
            <h5 class="modal-title " id="exampleModalLabel">Update Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form class="row g-3" method="" action="" enctype="multipart/form-data" >
            <div class="col-auto">
                <label for="product_id_update" >Product ID</label>
                <input type="text"  class="form-control" id="product_id_update" name="product_id_update" placeholder="Product ID" >
            </div>
            <div class="col-auto">
                <label for="product_code_update" >Product Code</label>
                <input type="text"  class="form-control" id="product_code_update" name="product_code_update" placeholder="Product Code" >
            </div>

            <div class="col-auto">
                <label for="name_update" >Product Name</label>
                <input type="text"  class="form-control" id="name_update" name="name_update" placeholder="Product Name" >
            </div>

            <div class="col-auto">
                <label for="img_update" >Product Img</label>
                <input type="file"  class="form-control" id="img_update" name="img_update" placeholder="Product Img" >
            </div>

            <div class="col-auto">
                <label for="description_update" >Description</label>
                <textarea row="3" type="text"  class="form-control" id="description_update" name="description_update" placeholder="Description" ></textarea>
            </div>

            <div class="col-auto">
                <label for="qty_stock_update" >Quantity Stock</label>
                <input type="number"  class="form-control" id="qty_stock_update" name="qty_stock_update" placeholder="Quantity Stock" >
            </div>

            <div class="col-auto">
                <label for="on_hand_update" >On Hand</label>
                <input type="text"  class="form-control" id="on_hand_update" name="on_hand_update" placeholder="On Hand" >
            </div>

            <div class="col-auto">
                <label for="price_update" >Price</label>
                <input type="number"  class="form-control" id="price_update" name="price_update" placeholder="Price" >
            </div>

            <div class="col-auto">
                <label for="category_id_update" >Category</label>
                <select id="category_id_update" name="category_id_update" class="form-control">
                    <?php 
                    
                    loadCategory();
                    ?>
                </select>
            </div>

            <div class="col-auto">
                <label for="supplier_id_update" >Supplier</label>
                <select id="supplier_id_update" name="supplier_id_update" class="form-control">
                    <?php 
                    loadSupplier();
                    ?>
                </select>
            </div>

            <div class="col-auto">
                <label for="date_stock_in_update" >Date Stock In</label>
                <input type="date"  class="form-control" id="date_stock_in_update" name="date_stock_in_update" placeholder="Date Stock In" >
            </div>
            <div class="col-auto">
                <label for="state_update" >State</label>
                <select class="form-control" id="state_update" name="state_update" placeholder="">
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                </select>
            </div>
            

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="Update">Save Changes</button>
            </div>
        </form>
                
                
                
        </div>
        
    </div>
</div>
</div>

<!--Modal View-->
<div class="modal fade" id="View" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-info">
            <h5 class="modal-title " id="exampleModalLabel">View Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form class="row g-3" method="" action="" enctype="multipart/form-data" >
                <div class="col-auto">
                    <label for="product_code_view" >Product Code</label>
                    <input type="text"  class="form-control" id="product_code_view" name="product_code_view" placeholder="Product Code" >
                </div>

                <div class="col-auto">
                    <label for="name_view" >Product Name</label>
                    <input type="text"  class="form-control" id="name_view" name="name_view" placeholder="Product Name" >
                </div>

                <div class="col-auto">
                    <label for="img_view" >Product Img</label>
                    <input type="file"  class="form-control" id="img_view" name="img_view" placeholder="Product Img" >
                </div>

                <div class="col-auto">
                    <label for="description_view" >Description</label>
                    <input type="text"  class="form-control" id="description_view" name="description_view" placeholder="Description" >
                </div>

                <div class="col-auto">
                    <label for="qty_stock_view" >Quantity Stock</label>
                    <input type="number"  class="form-control" id="qty_stock_view" name="qty_stock_view" placeholder="Quantity Stock" >
                </div>

                <div class="col-auto">
                    <label for="on_hand_view" >On Hand</label>
                    <input type="text"  class="form-control" id="on_hand_view" name="on_hand_view" placeholder="On Hand" >
                </div>

                <div class="col-auto">
                    <label for="price_view" >Price</label>
                    <input type="number"  class="form-control" id="price_view" name="price_view" placeholder="Price" >
                </div>

                <div class="col-auto">
                    <label for="category_id_view" >Category</label>
                    <select id="category_id_view" name="category_id_view" class="form-control">
                        <?php 
                        
                        loadCategory();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="supplier_id_view" >Supplier</label>
                    <select id="supplier_id_view" name="supplier_id_view" class="form-control">
                        <?php 
                        loadSupplier();
                        ?>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="date_stock_in_view" >Date Stock In</label>
                    <input type="date"  class="form-control" id="date_stock_in_view" name="date_stock_in_view" placeholder="Date Stock In" >
                </div>
                <div class="col-auto">
                    <label for="state_view" >State</label>
                    <select class="form-control" id="state_view" name="state_view" placeholder="">
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select>
                </div>  
                <div class="col-auto">
                    <label for="view_number_view" >View Number</label>
                    <input type="number"  class="form-control" id="view_number_view" name="view_number_view" placeholder="View Number" >
                </div>
                <div class="col-auto">
                    <label for="buy_number_view" >Buy Number</label>
                    <input type="number"  class="form-control" id="buy_number_view" name="buy_number_view" placeholder="Buy Number" >
                </div> 
                    
                    

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </form>
                
                
                
        </div>
        
    </div>
</div>
</div>