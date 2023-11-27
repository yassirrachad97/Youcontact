<?php
session_start();
// $data = $result->fetch_assoc() ;

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         var_dump($row) ;
//     }
// }else{
//     echo "data not found" ;
// }
// session_start() ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>youContact</title>
    <link rel="stylesheet" href="./style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar bg-light navbar-expand-lg navbar-light top-navbar justify-content-between" data-toggle="sticky-onscroll">
                <a class="navbar-brand" href="#">YouContact</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <div>
                        <h2>Hello <?= $_SESSION["user"] ?></h2>
                    </div>

                    <div class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">profil</a></li>
                            <li><a class="dropdown-item" href="index.php">contact</a></li>
                            <li> <a class="dropdown-item" href="http://localhost/brief2_sprint-3/logout">log Out</a></li>
                        </ul>
                    </div>

                <?php } else {; ?>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <a class="btn btn-primary">SIGN UP</a>

                    </div>
                    </div>
        </nav>
    <?php
                } ?>
    </header>