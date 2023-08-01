<!-- HEADER -->
@include('partials._client_header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hotel Name Ltd Edit Item</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Item</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Item</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputFile">Item image</label>
                                        <br />
                                        <img src="/dist/img/towel.png"  style="width: 30%;"  class="product-image" alt="Product Image">
                                        <br />
                                        <br />
                                        <input type="file" id="fileInput" accept="image/*" />
                                        <img id="preview" class="product-image"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" value="Product name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Category</label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                                                <select class="form-control">
                                                    <option>Category 1</option>
                                                    <option>Category 2</option>
                                                    <option>Category 3</option>
                                                    <option>Category 4</option>
                                                    <option>Category 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Supplier</label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                                                <select class="form-control">
                                                    <option>Supplier 1</option>
                                                    <option>Supplier 2</option>
                                                    <option>Supplier 3</option>
                                                    <option>Supplier 4</option>
                                                    <option>Supplier 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item Quantity</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="2">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6"> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Wholesale Price</label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">KES</span>
                                                    </div>
                                                    <input type="text" class="form-control" value="1,000">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Retail Price</label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                                                
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">KES</span>
                                                    </div>
                                                    <input type="text" class="form-control" value="1,850">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Item Description</label>
                                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                        <textarea class="form-control">Item description...</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- FOOTER START -->
@include('partials._client_footer')
