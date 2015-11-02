<?php
session_start();

if (isset($_SESSION['id'])) {
    // Put stored session variables into local PHP variable
    $uid = $_SESSION['id'];
    $usname = $_SESSION['username'];
	$uLast = $_SESSION['lastname'];
	$uFirst = $_SESSION['firstname'];
    $result = "Admin: <br /> Firstname: ".$usname. "<br /> Id: ".$uid."<br> Firstname:".$uLast."<br> Firstname:".$uFirst."<br>";
} else {
    $result = "You are not logged in yet";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $usname ;?> - Test Site</title>
</head>

<body>
<?php
echo $result;
echo "<a href=''>Messages </a><br>";
echo "<a href=''>Forum</a><br>";
echo "<a href=''>News</a><br>";
echo "<a href=''>Immigration</a><br>";
echo "<br> (<a href='logout.php'>Logout</a>)" ;
?>
</body>
</html>