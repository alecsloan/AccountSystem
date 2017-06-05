<?php



if (!empty($_POST['email']) && !empty($_POST['password'])){
    
    $link = mysqli_connect("localhost", "root", "<password>", "<databaseName>");
    
    $formEmail = $_POST['email'];
    $formPassword = $_POST['password'];
    $result = mysqli_query($link,"SELECT * FROM <tableName> WHERE email='".$formEmail."'");
    if ($result){
        $row = mysqli_fetch_assoc($result);
        $hash = $row['hashedPassword'];
        $verify = password_verify($formPassword,$hash);
        if($verify){
            session_start();
            $_SESSION['Email'] = $formEmail;
            $_SESSION['UID'] = $row['id'];
            $_SESSION['LoggedIn'] = 1;
            echo '<script>window.location = "../account.php"</script>';
        }else{
            
        }
    }
        
        
    echo '<script>window.location = "../index.php?Er=1"</script>';

}else{
    //If they didn't enter anything into the form
    echo '<script>window.location = "../index.php"</script>';
}
?>
</body>
</html>