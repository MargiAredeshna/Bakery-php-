<?php include 'header.php'; ?>



<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Producat Details</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="query.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Category Name </label>
                        <div class="col-sm-9">
                            <select class="default-select  form-control wide" name="p_catname" required>
                                <option value="">Select Category</option>
                                <?php
                                $sql = "SELECT categoryname,id FROM productcategory where isactive = 1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['categoryname']; ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Producat Name </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="p_name" placeholder="Producat Name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="p_longdesc" rows="4" cols="50" placeholder="Long Description" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Img</label>
                        <div class=" col-sm-9 input-group custom_file_input w-auto">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="pro_img">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Original Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="p_orgiprice" placeholder=" Enter Original Price" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="p_price" placeholder="Enter Price" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Verayti</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="p_verayti" placeholder="Enter Verayti" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-danger" id="add_producat" name="add_producat" value="Add producat">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>