<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input/css/style.css">
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $phone_number = $_POST['phone_number'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        echo "<div class='thank-you'>Thank You! " . $first_name . " " . $last_name . ". The phone number you entered is: " . $phone_number . ". The email you entered is: " . $email . "</div>";
    } else {
    ?>
    <form action="" method="POST">
        Phone Number: <input type="text" name="phone_number"><br>
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>