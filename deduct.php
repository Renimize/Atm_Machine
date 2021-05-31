<?php
session_start();
include "database.php";
?>
<?php
    if (isset($_POST['Withdraw'])){
        $deductamt = $_POST['deductamt'];
        // deductamt = amt inputted to be used to deduct
        // deductbal = SQL CODE OF DEDUCTED BALANCE
        
        while
            {
                $withdrawbal = $deductamt - $_SESSION['balance'];
            }
            $deductedbal = ("UPDATE accounts SET balance = '$withdrawbal' WHERE a_no = '$a_no'") or die(mysql_error()." while running \"UPDATE accounts SET balance = '$withdrawbal' WHERE a_no = '$a_no'\"");
    }
        
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Withdraw</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method = "POST" action = "">
        <h2>Current Balance: <?php echo $_SESSION['balance'] ?></h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class = "error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <input type="number" name="deductamt" id = "deductamt" placeholder="Enter Amount to Deduct from your balance">
        <button type="submit" name="Withdraw">Withdraw</button>
        <a href="home.php">back</a>
        
    </form>
</body>
</html>
