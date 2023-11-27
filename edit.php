<?php
include('connect.php');
?>



<?php
if (isset($_POST['edit'])) {
    $id = $_POST['idedit'];
    $name = $_POST["userName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $IN = "UPDATE `contact` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id = '$id'";
    $result = mysqli_query($conn, $IN);
    header("location:./index.php");
    exit();
}

?>
</body>

</html>