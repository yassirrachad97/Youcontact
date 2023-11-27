
<?php
include('connect.php');
include("header.php");
?>
<div class="container mt-5 mb-5">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-8">
                            <div class="card-block">
                            <p class="m-b-10 f-w-600">usernam</p>
                            <input class="text-muted f-w-400" type="text" value="  <?= $_SESSION["user"] ?>" readonly style="border:none;" id="doubleclk"> 
                                <input class="text-muted f-w-400" type="text" value=" <?= $_SESSION["user"] ?>"  style="display:none;" id="doubleclk2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?= $_SESSION["email"] ?></h6>
                                    </div>
                               
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include("footer.php") ?>