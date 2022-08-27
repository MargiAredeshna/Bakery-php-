<?php include "header.php";
include '../dbcon.php'; ?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Contact Information</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Create Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from contact";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                            <td><?= $row['name'];?></td>
                            <td><?= $row['email'];?></td>
                            <td><?= $row['phone'];?></td>
                            <td><?= $row['message'];?></td>
                            <td><?= $row['create_date'];?></td>
                        </tr>
                            <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>