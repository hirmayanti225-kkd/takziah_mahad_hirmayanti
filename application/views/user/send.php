<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$noWa = $_POST['noWa'];

	header("location:https://api.whatsapp.com/send?phone=$noWa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan:%20$message");
} else {
	echo "
			<script>
				window.location=history.go(-1);
			</script>
		";
}