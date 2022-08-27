<?php include "header.php" ?>
<div class="container w-75 mt-0" id="settimeout">
	<?php
	if (isset($_GET['up']) && $_GET['up'] == "true") { ?>
		<p class="text-center alert alert-success solid"> FeedBack Update Successfully</p>
	<?php } ?>

	<?php
	if (isset($_GET['up']) && $_GET['up'] == "false") { ?>
		<p class="text-center alert alert-danger solid"> FeedBack Is Not Update</p>
	<?php } ?>
	<?php
	if (isset($_GET['del']) && $_GET['del'] == "true") { ?>
		<p class="text-center alert alert-danger solid"> FeedBack Delete Successfully</p>
	<?php } ?>

	<?php
	if (isset($_GET['del']) && $_GET['del'] == "false") { ?>
		<p class="text-center alert alert-danger solid"> FeedBack Is Not Delete</p>
	<?php } ?>
</div>
<div class="col-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">FeedBack</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="example4" class="display" style="min-width: 845px">
					<thead>
						<tr>
							<th>Id</th>
							<th>User Id</th>
							<th>Feedback</th>
							<th>Producat Id</th>
							<th>Create Date</th>
							<th>Is Active</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = "select * from feedback ORDER BY id DESC";
						$result = $conn->query($sql);
						while ($row = $result->fetch_assoc()) {
						?>
							<tr>
								<td><?= $row['id'] ?></td>
								<td><?= $row['user_id'] ?></td>
								<td><?= $row['feedback'] ?></td>
								<td><?= $row['p_id'] ?></td>
								<td><?= $row['createdate'] ?></td>
								<td><span class="badge light <?php if ($row['feed_isactive'] == "1") {
																	echo " badge-success";
																} else {
																	echo "badge-danger";
																} ?>"><i class="fa fa-circle <?php if ($row['feed_isactive'] == "1") {
																									echo "text-success";
																								} else {
																									echo "text-danger";
																								} ?>  me-1"></i></span></td>
								<td>
									<div class="d-flex">
										<a class="btn btn-primary shadow btn-xs sharp me-1 feedback_update" data-bs-toggle="modal" data-bs-target="#editfeedback" data-id="<?= $row['id'] ?>" data-isactive="<?= $row['feed_isactive'] ?>"><i class="fas fa-pencil-alt"></i></a>
										<a href="query.php?feed=<?= $row['id'] ?>" class="btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash"></i></a>
								</td>
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
<div id="editfeedback" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Update FeedBack</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="update_form" action="query.php" method="post">
					<input type="hidden" id="id_feedback" name="feed_id" class="form-control" required>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
							<input class="form-check-input" id="feedback_on" type="radio" name="feed" value="1">
							<label class="form-check-label" for="customCheckBox7">Show Feedback</label>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
							<input class="form-check-input" checked type="radio" name="feed" value="2">
							<label class="form-check-label" for="customCheckBox7">Dont's show</label>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-danger" id="update" name="feedback_update" value="Update">
			</div>
			</form>
		</div>
	</div>
</div>
<?php include "footer.php" ?>