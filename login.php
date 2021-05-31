<?php
session_start();
include "database.php";

if (isset($_POST['acct']) && isset($_POST['pin'])) {
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    $acct = validate($_POST['acct']);
    $pin = validate($_POST['pin']);

    if (empty($acct)) {
        header("Location: index.php?error=Account Number is Required");
        exit();
    } else if (empty($pin)) {
        header("Location: index.php?error=PIN is Required");
        exit();
    }else {
        $sql = "SELECT * FROM accounts WHERE a_no='$acct' AND puk='$pin'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['a_no'] === $acct && $row['puk'] === $pin) {
                $_SESSION['last_name'] = $row ['last_name'];
                $_SESSION['ctn'] = $row ['ctn'];
                $_SESSION['first_name'] = $row ['first_name'];
                $_SESSION['id'] = $row ['id'];
                $_SESSION['a_no'] = $row ['a_no'];
                $_SESSION['puk'] = $row ['puk'];
                $_SESSION['balance'] = $row ['balance'];
                header("Location: home.php");
            exit();
                
        }else{
            header("Location: index.php?error=Incorrect Account Number or PIN");
            exit();
        }
    }else{
        header("Location: index.php?error=Incorect User name or password");
        exit();
    }
}
}