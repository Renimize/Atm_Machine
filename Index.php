<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class = "error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <label>Account Number</label>
        <input type="text" name="acct" placeholder="Enter Account Number">

        <label> PIN</label>
        <input type="pin" name="pin" placeholder="Enter Pin">

        <button type="submit">Login</button>
    </form>
</body>
</html>
