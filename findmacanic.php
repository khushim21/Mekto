<?php
include('./database.php');
$msg = null;
session_start();
if (isset($_POST['sendrequest'])) {
	$msg = "You are not login! Please Login first to send Request";
}
if (isset($_POST['viewfeedback'])) {
	$msg = "You are not login! Please Login first to view Feedback";
}
if (isset($msg)) {
	echo ("<script>alert('" . $msg . "');window.location.replace('login.php');</script>");
}

?>
<html>

<head>
	<title>Mekto</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="./jquery.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/f19af8a373.js" crossorigin="anonymous">
	</script>
</head>

<body>
	<?php
    include('navbar.php');
    ?>


	<?php
        include('findmechForm.php');
        ?>

	<div class="container">

		<?php if (isset($_POST['searchmechanic'])) { ?>
		<h2 style="text-align:center">All Mechanic In Your Selected Area</h2>

		<div class="selectcategory">
		</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">S.No</th>
					<th scope="col">Name</th>
					<th scope="col">Address</th>
					<th scope="col">Experience</th>
					<th scope="col">Rate/Houe</th>
					<th scope="col">Contact</th>
					<th scope="col">Rating</th>
					<th scope="col">Feedback</th>
					<th scope="col">Request</th>
				</tr>
			</thead>
			<tr>
				<?php
	                require './database.php';
	                $msg = null;
	                $sno = 1;
	                $selectedarea = $_POST['area'];
	                $query = "SELECT * ,IFNULL((SELECT (SUM(rating)/COUNT(rating))  FROM feedback WHERE feedback_proffessional=professional.mechanic_id ), 0) AS mechRating FROM professional inner join city_area On city_area.area_id=professional.machanic_city_area inner join cities On cities.city_id=professional.mechanic_city Where machanic_city_area='$selectedarea'";
	                $results = mysqli_query($connection, $query);
	                if ($results) {
		                if (mysqli_num_rows($results) > 0) {
			                while ($row = mysqli_fetch_object($results)) {
				                $machanicid = $row->mechanic_id;
				                $mach_name = $row->mechanic_Fullname;

				                $address = $row->mechanic_address;
				                $city = $row->city_name;
				                $contact = $row->mechanic_contact;
				                $area = $row->area_name;
				                $experience = $row->experience;
				                $rateperhour = $row->rate_per_hour;
				                $rating = $row->mechRating;

                        ?>
				<td>
					<?php echo $sno++; ?>
				</td>
				<td>
					<?php echo $mach_name; ?>
				</td>
				<td>
					<?php echo $address . ' ' . $area . ' ' . $city; ?>
				</td>
				<td>
					<?php echo $experience . " Year's"; ?>
				</td>
				<td>
					<?php echo $rateperhour . " Rupees"; ?>
				</td>
				<td>
					<?php echo $contact; ?>
				</td>
				<td>
					<?php echo $rating . " Star"; ?>
				</td>
				<form action="" method="POST">
					<input type="hidden" name="machanicid" Value="<?php echo $machanicid; ?>" />
					<td><input type="submit" name="viewfeedback" Value="Feedbacks" style="width:auto; margin:0;" /></td>
				</form>
				<form action="" method="POST">
					<input type="hidden" name="machanicid" Value="<?php echo $machanicid; ?>" />
					<td><input type="submit" name="sendrequest" Value="Send Request" style="width:auto; margin:0;" />
					</td>
				</form>

			</tr>
			<?php }
		                }
	                } ?>
		</table>
		<?php } ?>


	</div>


	<?php
    include('footer.php');
    ?>