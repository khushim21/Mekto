<?php
include('database.php');
$msg = null;
if (isset($_POST['login'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$usertype = $_POST['usertype'];
			if ($usertype == 'Admin') {
				$query = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
				$results = mysqli_query($connection, $query);
				if ($results) {
					if (mysqli_num_rows($results) > 0) {
						$row = mysqli_fetch_object($results);
						session_start();
						$_SESSION["user_id"] = $row->admin_id;
						$_SESSION["user_name"] = $row->admin_name;

						header('Location:admin/adminhome.php');
					} else {
						$msg = "Incorect Username Or Password";
					}
				} // db error code
			} elseif ($usertype == 'machanic') {
				$query = "SELECT * FROM professional WHERE mechanic_email = '$username' AND password = '$password'";
				$results = mysqli_query($connection, $query);
				if ($results) {
					if (mysqli_num_rows($results) > 0) {
						$row = mysqli_fetch_object($results);

						session_start();
						$_SESSION["proff_id"] = $row->mechanic_id;
						$_SESSION["proff_name"] = $row->mechanic_Fullname;
						$_SESSION["professionid"] = $row->profession;

						header('Location: machanic/professionalhome.php');
					} else {
						$msg = "Incorect Username Or Password";
					}
				} // db error code
			} elseif ($usertype == 'User') {
				$query = "SELECT * FROM user WHERE user_email = '$username' AND user_password = '$password'";
				$results = mysqli_query($connection, $query);
				if ($results) {
					if (mysqli_num_rows($results) > 0) {
						$row = mysqli_fetch_object($results);

						session_start();
						echo $_SESSION["user_id"] = $row->user_id;
						echo $_SESSION["user_name"] = $row->user_Fullname;

						header('Location: user/userhome.php');
					} else {
						$msg = "Incorect Username Or Password";
					}
				} // db error code
			}

		} else {
			$msg = "Fill all input fields";
		}
	} else {
		$msg = "Plz Log in properly..";
	}
}
if (isset($msg)) {
	echo ("<script>alert('" . $msg . "');</script>");
}

?>

<html>

<head>
	<title>Online Auto Mechanic Finder</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/f19af8a373.js" crossorigin="anonymous">
	</script>
</head>

<body style="background-color: #EEEEEE;">
	<?php include('navbar.php'); ?>


	<?php
    include('loginForm.php');
    ?>



	<?php
    include('footer.php');
    ?>