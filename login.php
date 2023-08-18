<?php 
  include("./dbjob.php");

  session_start();

  if($_POST){
    
    $email=(isset($_POST['email']))?$_POST['email']:"";
    $pass=(isset($_POST['password']))?$_POST['password']:"";

    $sql=$pdo->prepare("SELECT *,
                        (SELECT COUNT(*) FROM users WHERE email = :email AND pass = :pass) AS n_user
                        FROM users
                        WHERE email = :email AND pass = :pass;");
    $sql->bindParam(":email",$email);
    $sql->bindParam(":pass",$pass);
    $sql->execute();
    $r_user=$sql->fetch(PDO::FETCH_LAZY);

    if($r_user['n_user']>0){

      $_SESSION['id_user']=$r_user['id'];
      $_SESSION['usuario']=$r_user['name'];
      $_SESSION['logeo']=true;
      header("location:index.php");

    } else {
      $msn="Error: email o password incorrectos";
    }
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <br/><br/>

                <?php if(isset($msn)){?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong><?php echo $msn;?></strong>
                </div>
                <?php }?>

                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        
                        <script>
                          var alertList = document.querySelectorAll('.alert');
                          alertList.forEach(function (alert) {
                            new bootstrap.Alert(alert)
                          })
                        </script>

                        <form action="" method="post">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text"
                                class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password"
                                class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            </div>

                            <input name="" id="" class="btn btn-primary" type="submit" value="ingresar">
                            <a name="" id="" class="btn btn-danger" href="#" role="button">register</a>

                        </form>
                    </div>
                    
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>