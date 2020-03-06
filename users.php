<?php 
    require_once("connection.php");
    $sql = "SELECT * FROM users";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
   

?>

<?php include("head.php"); ?>
    <?php include("navigation.php"); ?>
<?php include("userlist.php"); ?>
<?php include("bottom.php"); ?>