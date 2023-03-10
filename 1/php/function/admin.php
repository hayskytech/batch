<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<header>
	<h1>Palace Function Hall</h1>
	<?php include 'header.php'; ?>	
	</header>
	<main>
		<div id="content">
			<?php
			$table_name = 'functions';
			if(isset($_POST["add"])){
				$full_name = $_POST["full_name"];
				$function_date = $_POST["function_date"];
				$shift = $_POST["shift"];
				$ac = $_POST["ac"];
				$phone = $_POST["phone"];
				$status = $_POST["status"];
				$sql = "INSERT INTO $table_name (full_name,function_date,shift,ac,phone,status) VALUES ('$full_name','$function_date','$shift','$ac','$phone','$status')";
				$conn->query($sql);
			}
			if(isset($_POST["delete"])){
				$id = $_POST["id"];
				$conn->query("DELETE FROM $table_name WHERE id = $id");
			}
			?>
			<form method="POST" enctype="multipart/form-data">
				<?php
				if(isset($_POST["edit"])){
					echo '<input type="hidden" name="id" value="'.$row["id"].'">';
				}
				?>
				<table class="ui blue striped table collapsing">
			        <tr>
			            <td>Full Name</td>
			            <td><input type="text" name="full_name" >
			            </td>
			        </tr>
			        <tr>
			            <td>Function Date</td>
			            <td><input type="date" name="function_date" >
			            </td>
			        </tr>
			        <tr>
			            <td>Shift</td>
			            <td><input type="text" name="shift" >
			            </td>
			        </tr>
			        <tr>
			        <td>Ac</td>
			        <td><select  name="ac" >
			                <option value="AC">AC</option>
			                <option value="Non-AC">Non-AC</option>
			            </select>
			        </td>
			        </tr>
			        <tr>
			            <td>Phone</td>
			            <td><input type="text" name="phone" >
			            </td>
			        </tr>
			        <tr>
			        <td>Status</td>
			        <td><select  name="status" >
			                <option value="Pending">Pending</option>
			                <option value="Confirmed">Confirmed</option>
			            </select>
			        </td>
			        </tr>
							<tr><td></td>
								<?php
								if(isset($_POST["edit"])){
									echo '<td>
									<input type="hidden" name="id" value="'.$_POST["id"].'">
									<input type="submit" name="save" value="Save"></td>';
								} else {
									echo '<td><input type="submit" name="add" value="Add"></td>';
								}
								?>
							</tr>
				</table>
			</form>
			<?php
			if(isset($_POST["edit"])){
				$id = $_POST["id"];
				$result = $conn->query("SELECT * FROM $table_name WHERE id = $id");
				$row = $result->fetch_assoc();
				$data["full_name"] = $row["full_name"];
				$data["function_date"] = $row["function_date"];
				$data["shift"] = $row["shift"];
				$data["ac"] = $row["ac"];
				$data["phone"] = $row["phone"];
				$data["status"] = $row["status"];
				?>
				<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js">
				</script>
			    <script type="text/javascript">
			        jQuery('input[name=full_name]').val('<?php echo $data["full_name"]; ?>');
			        jQuery('input[name=function_date]').val('<?php echo $data["function_date"]; ?>');
			        jQuery('input[name=shift]').val('<?php echo $data["shift"]; ?>');
			        jQuery('select[name=ac]').val('<?php echo $data["ac"]; ?>');
			        jQuery('input[name=phone]').val('<?php echo $data["phone"]; ?>');
			        jQuery('select[name=status]').val('<?php echo $data["status"]; ?>');
			    </script>
				<?php
			}
			if(isset($_POST["save"])){
				$id = $_POST["id"];
				$full_name = $_POST["full_name"];
				$function_date = $_POST["function_date"];
				$shift = $_POST["shift"];
				$ac = $_POST["ac"];
				$phone = $_POST["phone"];
				$status = $_POST["status"];
				$sql = "UPDATE $table_name SET full_name = '$full_name',function_date = '$function_date',shift = '$shift',ac = '$ac',phone = '$phone',status = '$status' WHERE id = $id";
				$conn->query($sql);
			}
			?>
			<hr>
			<table>
				<thead>
					<tr>
						<th>Full Name</th>
						<th>Function Date</th>
						<th>Shift</th>
						<th>Ac</th>
						<th>Phone</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM $table_name";
					$rows = $conn->query($sql);
					while($row = $rows->fetch_assoc()){
						echo '<tr row-id="'.$row["id"].'">';
						echo '<td>'.$row["full_name"].'</td>';
						echo '<td>'.$row["function_date"].'</td>';
						echo '<td>'.$row["shift"].'</td>';
						echo '<td>'.$row["ac"].'</td>';
						echo '<td>'.$row["phone"].'</td>';
						echo '<td>'.$row["status"].'</td>';
						echo '<td>
							<form method="post">
								<input type="hidden" name="id" value="'.$row["id"].'">
								<input type="submit" name="edit" value="Edit">
								<input type="submit" name="delete" value="Delete">
							</form>
						</td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
			</div>
			<script type="text/javascript">
				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
			</script>
			<style type="text/css">
				table,th,td{
					padding: 5px;
					border: 1px solid;
					border-collapse: collapse;
				}
				form{
					margin: 0;
				}
			</style>
		</div>
	</main>
</body>
</html>
