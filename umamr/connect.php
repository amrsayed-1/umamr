<?php
	$name = $_POST['name'];
	$customer_email = $_POST['customer_email'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['date'];
	$guests = $_POST['guests'];

	// Database connection
	$conn = new mysqli('localhost','root','','umamrdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(name, customer_email, phone, date, time, guests) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $customer_email, $phone, $date, $time, $guests);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
