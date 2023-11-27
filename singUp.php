<?php
include('connect.php');
include("header.php");
?>

<section class="vh-80 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Sign up</h2>
              <form action="" method="POST">
                <div class="form-outline form-white mb-4">
                  <input name="username" type="text" id="typeUsernameX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeUsernamX">usernam</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                <button type="submit" class="btn btn-outline-light btn-lg px-5" name="ok">sign up</button>
              </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST['ok'])) {
  $name = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $dateInscription = date("Y/m/d/h:i:sa");
  if (preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', "moo123")) {
    echo 'succeeded';
  } else {
    echo 'failed';
  }

  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {

    echo "the email is invalid";
  }
  if (preg_match('/^(?=.*\d)(?=.*[a-zA-Z]).{6,}$/', $_POST['password'])) {
    echo 'matched';
  } else {
    echo 'not matched';
  }
  $IN = "INSERT INTO utilisateur VALUE(NULL,'$name','$password','$email','$dateInscription')";
  $result = mysqli_query($conn, $IN);
  header("location:./authentification.php");
  exit();
}


?>
<?php include("footer.php") ?>