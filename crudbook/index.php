<?php
	require_once("../crudbook/php/component.php");
	require_once("../crudbook/php/operation.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Library</title>

	<script src="https://kit.fontawesome.com/93d4de7d67.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py4- bg-dark text-light rounded"><i class="fas fa-book"></i>  Library</h1>

			<div class="d-flex justify-content-center">
				<form action="" method="post" class="w-50">

				<div class="pt-2">
					<?php
						inputElement(icon: "<i class='fas fa-id-card-alt'></i>", placeholder: "ID", name: "book_id", value: "");
					?>
				</div>

				<div class="pt-2">
					<?php
						inputElement(icon: "<i class='fas fa-book'></i>", placeholder: "Book name", name: "book_name", value: "");
					?>
				</div>

				<div class="row">
					<div class="col">
						<?php
							inputElement(icon: "<i class='fas fa-pen-alt'></i>", placeholder: "Publisher", name: "book_publisher", value: "");
						?>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<?php
						buttonElement(btnid: "btn-add", styleclass: "btn btn-success", text: "<i class='fas fa-plus'></i>", name: "Add", attr: "dat-toggle='tooltip' data-placement='bottom' title='Add'");
						buttonElement(btnid: "btn-update", styleclass: "btn btn-light border", text: "<i class='fas fa-edit'></i>", name: "Update", attr: "dat-toggle='tooltip' data-placement='bottom' title='Update'");
						buttonElement(btnid: "btn-remove", styleclass: "btn btn-danger", text: "<i class='fas fa-trash-alt'></i>", name: "Delete", attr: "dat-toggle='tooltip' data-placement='bottom' title='Delete'");
					?>
				</div>
			</form>
		</div>
		<div class="d-flex table-data">
			<table class="table table-striped table-dark">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Book Name</th>
						<th>Publisher</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php
						$result = getData();

						if($result)
						{
							while ($row = mysqli_fetch_assoc($result))
							{ ?>
								<tr>
									<td data-id="<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
									<td data-id="<?php echo $row['id'];?>"><?php echo $row['book_name'];?></td>
									<td data-id="<?php echo $row['id'];?>"><?php echo $row['publisher'];?></td>
									<td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'];?>"></i></td>
								</tr>
							<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script src="../crudbook/php/main.js"></script>
</body>
</html>