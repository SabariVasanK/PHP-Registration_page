<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>User Registration</h2>
    <form action="register_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="address">Address:</label>
        <textarea name="address"></textarea><br>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone"><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
