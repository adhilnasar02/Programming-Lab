
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    Confirm Password:
    <input type="password" name="confirm">
    <br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if (empty($name)) {
        echo "Name is required";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
    }
    elseif (strlen($password) < 6) {
        echo "Password must contain at least 6 characters";
    }
    elseif ($password != $confirm) {
        echo "Passwords do not match";
    }
    else {
        echo "Registration Successful";
    }
}
?>

</body>
</html>

