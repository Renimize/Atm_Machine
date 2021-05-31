<?php
include "session.php";
include "database.php";
if (isset($_SESSION['user']['a_no']) && isset($_SESSION['user']['first_name'])) {}
    
?>
<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Hello, <?php echo $_SESSION['first_name'] ?></h1>
<form method = "POST" action = "">
        <h3>Your Profile</h3>
        <label>Name</label>
        <p><?php echo $_SESSION['first_name']," ", $_SESSION['last_name']?></p>
        <label>Contact Number</label>
        <p><?php echo $_SESSION['ctn'] ?></p>
        <label>Balance</label>
        <p><?php echo $_SESSION['balance'] ?></p>
        <a href='deduct.php'>Make a Widthdrawal</button>
        <a href="deposit.php">Make a Deposit</button>
        <a href="history.php">History</a>
        <a href="logout.php">Logout</a>
</form>
</body>
</html>
