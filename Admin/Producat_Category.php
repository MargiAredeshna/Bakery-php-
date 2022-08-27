<?php include 'header.php'; ?>


<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Category</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="query.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Category Name" name="cat_name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Img</label>
                        <div class=" col-sm-9 input-group custom_file_input w-auto">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="cat_img" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-danger" id="add_Category" name="add_Category" value="Add Category">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>