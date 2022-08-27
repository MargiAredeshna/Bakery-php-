<?php include 'header.php'; ?>
<div class="container w-75 mt-0" id="settimeout">
<?php
if (isset($_GET['add']) && $_GET['add'] == "true") { ?>
    <p class="text-center alert alert-success solid " > Category Add Successfully</p>  
<?php  } ?>
<?php
if (isset($_GET['add']) && $_GET['add'] == "false") { ?>
    <p class="text-center alert alert-danger solid"> Category Not Add</p>
<?php } ?>

<?php
if (isset($_GET['up']) && $_GET['up'] == "true") { ?>
    <p class="text-center alert alert-success solid"> Producat Update Successfully</p>
<?php } ?>

<?php
if (isset($_GET['up']) && $_GET['up'] == "false") { ?>
    <p class="text-center alert alert-danger solid"> Category Is Not Update</p>
<?php } ?>
<?php
if (isset($_GET['del']) && $_GET['del'] == "true") { ?>
    <p class="text-center alert alert-danger solid"> Category Delete Successfully</p>
<?php } ?>

<?php
if (isset($_GET['del']) && $_GET['del'] == "false") { ?>
    <p class="text-center alert alert-danger solid"> Category Is Not Delete</p>
<?php } ?>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All  Category</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            
                            <th>Is Active</th>
                            <th>Action</th>
                            <th>Category Img</th>
                            <th>Category Name</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM productcategory";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><span class="badge light badge-<?php if ($row['isactive'] == 1) {
                                                                        echo "success";
                                                                    } else {
                                                                        echo "danger";
                                                                    } ?>"><?php if ($row['isactive'] == 1) {
                                                                        echo "on";
                                                                    } else {
                                                                        echo "off";
                                                                    } ?></span></td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1 update" data-bs-toggle="modal" data-bs-target="#editEmployeeModal" data-id="<?php echo $row["id"]; ?>" data-name="<?php echo $row["categoryname"]; ?>" data-img="<?php echo $row["img"]; ?>" data-isactive="<?php echo $row["isactive"]; ?>"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="query.php?id=<?php echo $row["id"]; ?>"  class="btn btn-danger shadow btn-xs sharp " ><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                                <td><img class="rounded-lg" width="50" src="<?= $row['img']; ?>" alt="category<?= $row['categoryname']; ?>"></td>
                                <td><?= $row['categoryname']; ?> </td>
                                <td><?= $row['createdate']; ?></td>
                                
                                <td><?= $row['updatedate']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- update table -->
<div id="editEmployeeModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Producat Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="update_form" action="query.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="cat_name" class="form-control" placeholder="Category Name" name="cat_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">IMG</label>
                        <div class="col-sm-9">
                            <img class="rounded-lg" width="100" alt="img" id="cat_img" alt="choose file">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Upload Update Img</label>
                        <div class=" col-sm-9 input-group custom_file_input w-auto">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="updateimg">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row d_none_cat">
                        <label class="col-sm-3 col-form-label">Category Active</label>
                        <div class="col-sm-9">
                            <div class="row">
                            <div class="col-sm-5">
                                <input class="form-check-input"  checked type="radio" name="isactive" value="0">
                                <label class="form-check-label" for="customCheckBox7">Is Not Active Category</label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-check-input"  id="isactive" type="radio" name="isactive" value="1">
                                <label class="form-check-label" for="customCheckBox7">Is Active Category</label>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-danger" id="update" name="add_update" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>