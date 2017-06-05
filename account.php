<?php
session_start();
if (empty($_SESSION)){
    echo '<script>window.location = "../index.php?Er=3"</script>';
}else{
    echo'<title>Website | My Account</title>';
    include_once('system/header.php');
?>
    <h1>My Account</h1>            
       
<?php    
    include_once('system/footer.php');
}
?>