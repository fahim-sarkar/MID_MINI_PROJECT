<?php
	session_start();

	if(isset($_COOKIE['STATUS'])){
		if($_COOKIE['STATUS'] == "OK"){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Home Page</title>
</head>
<body>
    <form>
        <table>
            <h1>Welcome </h1>
            <?php echo $_COOKIE["name"];?>
            <tr>
                <td>
                    <a href="Profile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="password_change.php">Change Password</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="logout.php">Logout</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>