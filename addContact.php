<?php
include('connect.php');
?>



<?php
if (isset($_POST['ajouter'])) {
    $name = $_POST["userName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $id=$_SESSION['id'];
    $IN = "INSERT INTO contact VALUE(NULL,'$name','$email','$phone',$id)";
    $result = mysqli_query($conn, $IN);
    header("location:./index.php");
    exit();
}

?>
</body>

</html>