
<?php
include 'connect.php';
?>

 
    
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        $DELETE="DELETE FROM `contact` WHERE id='$id' ";
$result=mysqli_query($conn,$DELETE);
 
if(!$result){
    die (mysqli_connect_error());
}
header("location:./index.php");
exit();
    }

    ?>
</body>
</html>
