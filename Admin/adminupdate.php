<?php include 'header.php';include '../dbcon.php';?>
<?php
$sql = "select * from admin";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    ?>
<div class="container w-75" id="settimeout">
<?php
if (isset($_GET['update']) && $_GET['update'] == "true") { ?>
    <p class="text-center alert alert-success solid">Update Details  Successfully</p>
<?php  } ?>
<?php
if (isset($_GET['update']) && $_GET['update'] == "false") { ?>
    <p class="text-center alert alert-danger solid">Not Update Details</p>
<?php } ?>
</div>
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Admin Profile</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="query.php" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" value="<?= $row['id'];?>" placeholder="Name" >
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="<?= $row['name'];?>" placeholder="Name" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" value="<?= $row['email'];?>" placeholder="Enter Email" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">phone</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone" value="<?= $row['Phone'];?>" placeholder="Enter phone" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Img</label>
                        <div class="col-sm-9">
                            <img class="rounded-lg" width="100" alt="img" src="<?= $row['img'];?>" alt="choose file">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Img</label>
                        <div class=" col-sm-9 input-group custom_file_input w-auto">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="admin_updateimg">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">FaceBook</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="faceb" value="<?= $row['facebook'];?>" placeholder="Enter Facebook link" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="insta" value="<?= $row['instagram'];?>" placeholder="Enter Instagram link" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="address" rows="4" cols="50" placeholder="Enter Address" ><?= $row['address'];?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <span class="col-sm-3"></span>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-danger" id="updateadmin" name="updateadmin" value="Update Admin">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<?php include 'footer.php'; ?>