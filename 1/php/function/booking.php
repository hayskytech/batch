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
			<h2>Book Now</h2>
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
			<form action="" method="post"  enctype="multipart/form-data">
			    <table class="ui blue celled table collapsing unstackable sortable">
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
			        <td><select  name="shift" >
			                <option value="Afternoon">Afternoon</option>
			                <option value="Night">Night</option>
			            </select>
			        </td>
			        </tr>
			        <tr>
			            <td>Phone</td>
			            <td><input type="text" name="phone" >
			            </td>
			        </tr>
			        <tr>
			        <td>AC</td>
			        <td><select  name="ac" >
			                <option value="AC">AC</option>
			                <option value="Non-AC">Non-AC</option>
			            </select>
			        </td>
			        </tr>
			        <tr>
			            <td></td>
			            <td><input type="submit" name="book_now" value="Book Now" class="ui mini blue mini button"></td>
			        </tr>
			    </table>
			</form>
			<script type="text/javascript">
			    if ( window.history.replaceState ) {
			        // window.history.replaceState( null, null, window.location.href );
			    }
			</script>
			<?php
			$table_name = 'functions';
			if(isset($_POST["book_now"])){


				$full_name = $_POST["full_name"];
				$function_date = $_POST["function_date"];
				$shift = $_POST["shift"];
				$ac = $_POST["ac"];
				$phone = $_POST["phone"];


				$sql = "SELECT * FROM functions 
				WHERE function_date = '$function_date' 
				AND status='Confirmed' 
				AND shift='$shift'";
				$result = $conn->query($sql);


				if ($result->num_rows > 0) {
					echo '<h2>This date and shift is already booked.</h2>';
				} else {
					$sql = "INSERT INTO $table_name (full_name,function_date,shift,ac,phone,status) VALUES ('$full_name','$function_date','$shift','$ac','$phone','pending')";
					$conn->query($sql);
					echo '<h2>Booking submitted. We will call back to you soon.</h2>';

					

				}
			}
			?>
		</div>
	</main>
	<style type="text/css">
		form,input,select{
			font-size: 20px;
		}
		table,td{
			border: 2px solid;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</body>
</html>
