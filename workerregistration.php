<?php
include('database.php');
$msg = null;
if (isset($_POST['register'])) {
	if (!empty($_POST['name']) && !empty($_POST['cnic']) && !empty($_POST['mobile']) && ($_POST['city']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])) {
		$name = $_POST['name'];
		$cnic = $_POST['cnic'];
		$adress = $_POST['address'];
		$contact = $_POST['mobile'];
		$city = $_POST['city'];
		$area = $_POST['area'];
		$email = $_POST['email'];
		$experience = $_POST['experience'];
		$hourlyrate = $_POST['rate'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirmpassword'];

		if (strlen($_POST["password"]) <= '8') {
			$msg = "Your Password Must Contain At Least 8 Characters!";
		} elseif (!preg_match("#[0-9]+#", $password)) {
			$msg = "Your Password Must Contain At Least 1 Number!";
		} elseif (!preg_match("#[A-Z]+#", $password)) {
			$msg = "Your Password Must Contain At Least 1 Capital Letter!";
		} elseif (!preg_match("#[a-z]+#", $password)) {
			$msg = "Your Password Must Contain At Least 1 Lowercase Letter!";
		} else if (strlen($_POST["cnic"]) !== '12') {
			$msg = "Aadhar Number must contain 12 numbers";
		} else if (strlen($_POST["mobile"]) !== '10') {
			$msg = "Mobile number must be contain 10 numbers";
		} else {
			if ($password === $confirm_password) {
				$image = "";
				$server_folder = "profilePhoto/";
				$Server_path = $server_folder . basename($_FILES['photo']['name']);
				if (move_uploaded_file($_FILES["photo"]["tmp_name"], $Server_path)) {
					$image = $_FILES['photo']['name'];
				}
				$query = "INSERT INTO  professional 
			(mechanic_Fullname,mechanic_cnic,mechanic_address,mechanic_city,machanic_city_area,mechanic_contact,mechanic_email,experience,rate_per_hour,password,status,profile_photo)VALUES 
			('$name','$cnic','$adress ','$city','$area','$contact','$email','$experience','$hourlyrate','$password','Active','$image')";
				$results = mysqli_query($connection, $query);
				if ($results) {
					$msg = "Mechanic registered successfully!";
				}
			}
		}

	} else {
		$msg = "Fill all input fields";
	}
}
if (isset($msg)) {
	echo ("<script>alert('" . $msg . "');</script>");
}
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/f19af8a373.js" crossorigin="anonymous">
	</script>
	<title>Online Auto Mechanic Finder</title>
	<script type="text/javascript" src="./jquery.js"></script>
	<link rel="stylesheet" href="style.css">
	<script>
		function loadarea() {
			var disttrict = $('#distt').val();
			$.ajax({
				type: "POST",
				url: "selectarea_ajax.php",
				data: {
					'distt': disttrict
				},
				success: function (data) {
					console.log(data);
					$('#area').append(data);
				}
			});
		}
	</script>
</head>

<body>


	<body style="background-color: #EEEEEE;">
		<?php include('navbar.php'); ?>


		<?php
        include('mechForm.php');
        ?>



		<?php
        include('footer.php');
        ?>