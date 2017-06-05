<?php
    if ($_POST['password'] == $_POST['confirm-password']){
        $link = mysqli_connect("localhost", "root", "<password>", "<databaseName>");

        $formEmail = $_POST['email'];
        $formPassword = $_POST['password'];
        $findAccount = mysqli_query($link,"SELECT email FROM <tableName> WHERE email='".$formEmail."'");
        if (mysqli_num_rows($findAccount) == 0){
            $hash = password_hash($formPassword,PASSWORD_DEFAULT);
            $ip = $_SERVER['REMOTE_ADDR'];
            $ip = filter_var($ip, FILTER_VALIDATE_IP);
            $ip = ($ip === false) ? '0.0.0.0' : $ip;
            $sql = "insert into <tableName> (email, hashedPassword,regIP,lastIP) VALUES ('$formEmail','$hash','$ip','$ip')";
            $result = mysqli_query($link, $sql);
            session_start();
            $_SESSION['Email'] = $formEmail;
            $_SESSION['UID'] = $row['id'];
            $_SESSION['LoggedIn'] = 1;
            echo '<script>window.location = "../account.php"</script>';
        }else{
            echo '<script>window.location = "../index.php?Er=2"</script>'; 
        }
    }
    echo '<script>window.location = "../index.php?Er=4"</script>';

?>