<?php include 'header.php'; ?>
<div class="container w-75" id="settimeout">
<?php
    if (isset($_GET['add']) && $_GET['add'] == "true") { ?>
        <p class="text-center alert alert-success solid"> Producat Details Add Successfully</p>

    <?php  } ?>
    <?php
    if (isset($_GET['add']) && $_GET['add'] == "false") { ?>
        <p class="text-center alert alert-danger solid"> Producat Details Not Add</p>
    <?php } ?>
    <?php
    if (isset($_GET['up']) && $_GET['up'] == "true") { ?>
        <p class="text-center alert alert-success solid"> Producat Details Update Successfully</p>

    <?php  } ?>
    <?php
    if (isset($_GET['up']) && $_GET['up'] == "false") { ?>
        <p class="text-center alert alert-danger solid"> Producat Details Not Update</p>
    <?php } ?>
    <?php
    if (isset($_GET['del']) && $_GET['del'] == "true") { ?>
        <p class="text-center alert alert-danger solid"> Producat Delete Successfully</p>
    <?php } ?>

    <?php
    if (isset($_GET['del']) && $_GET['del'] == "false") { ?>
        <p class="text-center alert alert-danger solid"> Producat Is Not Delete</p>
    <?php } ?>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Producat Details</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>is Active</th>
                            <th>Action</th>
                            <th>Producat Img</th>
                            <th>Category Name</th>
                            <th>Producat Name</th>
                            <th>Long Description</th>
                            <th>Orignal price</th>
                            <th>Price</th>
                            <th>Verayti</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Offer Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT P.id, P.p_name, P.p_long_desc ,P.p_img ,P.p_orignal_price, P.p_price, P.p_variety, P.p_createdate, P.p_updatedate,P.offer,P.p_isactive,C.categoryname,C.id as catid FROM producattype AS P INNER JOIN productcategory AS C ON P.c_id=C.id";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            
                        ?>

                            <tr>
                                <td><span class="badge light badge-<?php if ($row['p_isactive'] == 1) {
                                                                        echo "success";
                                                                    } else {
                                                                        echo "danger";
                                                                    } ?>"><?php if ($row['p_isactive'] == 1) {
                                                                        echo "on";
                                                                    } else {
                                                                        echo "off";
                                                                    } ?></span></td>
                                                                    <td>
                                    <div class="d-flex">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1 pro_update" data-bs-toggle="modal" data-bs-target="#producatupate" data-id="<?php echo $row["id"]; ?>" data-cname="<?php echo $row["catid"]; ?>" data-pimg="<?php echo $row["p_img"]; ?>" data-name="<?php echo $row["p_name"]; ?>" data-isactive="<?php echo $row["p_isactive"]; ?>" data-long="<?php echo $row["p_long_desc"]; ?>" data-oprice="<?php echo $row["p_orignal_price"]; ?>" data-price="<?php echo $row["p_price"]; ?>" data-variety="<?php echo $row["p_variety"]; ?>" data-offer="<?= $row['offer']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="query.php?prodel=<?php echo $row["id"]; ?>" class="btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash"></i></a>
                                </td>
                                <td><img class="rounded-lg" width="100" src="<?php echo $row['p_img']; ?>"></td>
                                <td><?= $row['categoryname']; ?></td>
                                <td><?= $row['p_name']; ?></td>
                                <td><?= $row['p_long_desc']; ?></td>
                                <td><?= $row['p_orignal_price']; ?></td>
                                <td><?= $row['p_price']; ?></td>
                                <td><?= $row['p_variety']; ?></td>
                                <td><?= $row['p_createdate']; ?>
                                
                                <td><?= $row['p_updatedate']; ?></td>
                                <td><span class="badge light badge-<?php if ($row['offer'] == "on") {
                                                                        echo "success";
                                                                    } else {
                                                                        echo "danger";
                                                                    } ?>"><?= $row['offer']; ?></span></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- update table -->
<div id="producatupate" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Producat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="update_form" action="query.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="p_id" name="id" class="form-control" required>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Update Category Name </label>
                        <div class="col-sm-9">
                            <select class="form-control wide" id="P_catgory" name="p_catname" required>
                                <?php
                                $sql = "SELECT categoryname,id FROM productcategory WHERE isactive = 1";
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
                            <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Producat Name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="p_longdesc" name="p_longdesc" rows="4" cols="50" placeholder="Long Description" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Img</label>
                        <div class="col-sm-9">
                            <img class="rounded-lg" width="100" alt="img" id="pro_img" alt="choose file">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Upload Update Img</label>
                        <div class=" col-sm-9 input-group custom_file_input w-auto">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="pro_updateimg">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Original Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="p_orgiprice" name="p_orgiprice" placeholder=" Enter Original Price" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="p_price" name="p_price" placeholder="Enter Price" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Verayti</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="p_verayti" name="p_verayti" placeholder="Enter Verayti" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Offer</label>
                        <div class="col-sm-9">
                            <div class="row">
                            <div class="col-sm-5">
                                <input class="form-check-input" checked type="radio" name="offer" value="off">
                                <label class="form-check-label" for="customCheckBox7">Offer Not Apply </label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-check-input" id="offer_on" type="radio" name="offer" value="on">
                                <label class="form-check-label" for="customCheckBox7">Offer Apply Now And 40% offer</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="mb-3 row d_none_pro">
                        <label class="col-sm-3 col-form-label">Producat Active</label>
                        <div class="col-sm-9">
                            <div class="row">
                            <div class="col-sm-5">
                                <input class="form-check-input"  checked type="radio" name="isactive" value="0">
                                <label class="form-check-label" for="customCheckBox7">Is Not Active Producat</label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-check-input"  id="offer_isactive" type="radio" name="isactive" value="1">
                                <label class="form-check-label" for="customCheckBox7">Is Active Producat</label>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-danger" id="p_update" name="add_producatupdate" value="producat Update">
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
