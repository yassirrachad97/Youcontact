<?php
include("header.php");
include('connect.php');
if(isset($_SESSION['id'])){


?>



<div class="container my-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ADD CONTACT
    </button>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6 text-center"> contact</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark border border-3  text-white">
                            <td>id</td>
                            <td>name</td>
                            <td>email</td>
                            <td>phone</td>
                            <td>action</td>
                        </tr>
                        <?php
                        $id = $_SESSION['id'];
                        $query = "SELECT * FROM contact WHERE id_user=$id ";
                        $result = mysqli_query($conn, $query);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                                <tr>
                                    <td> <?= $row['id'] ?> </td>
                                    <td> <?= $row['name'] ?> </td>
                                    <td> <?= $row['email'] ?> </td>
                                    <td> <?= $row['phone'] ?> </td>
                                    <td> <a class="fa-solid fa-trash" href="delete.php?id= <?= $row['id'] ?>"></a>
                                        <button type="button" class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $row['id'] ?>">
                                        </button>
                                    </td>

                                </tr>
                                <div class="modal fade" id="staticBackdrop<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit.php" method="post" onsubmit="return validateForm()">
                    <input name="idedit" type="hidden" class="form-control" id="exampleInputid1" value="<?= $row['id'] ?>">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input name="userName" type="text" class="form-control" id="name" value="<?= $row['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="e-mail" aria-describedby="emailHelp" value="<?= $row['email'] ?>">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphone1" class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control" id="phone" value="<?= $row['phone'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="edit" value="edit">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



                        <?php
                            }
                        }
                        ?>
                    </table>

                </div>

            </div>
        </div>


    </div>

</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="addContact.php" method="post" onsubmit="return validateForm()">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input name="userName" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="e-mail" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphone1" class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="ajouter" value="ajouter" required>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php 
}else{
    header('Location: authentification.php');
}


include("footer.php") ?>