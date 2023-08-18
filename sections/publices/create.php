<?php 

include("../../dbjob.php");
include("../../templates/header.php");

if($_POST){
    
    $nombre=(isset($_POST['name']))?$_POST['name']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $pago=(isset($_POST['pago']))?$_POST['pago']:"";
    $jornada=(isset($_POST['jornada']))?$_POST['jornada']:"";

    $pago_d=floatval($pago);
    $jornal=intval($jornada);
    $company=$_SESSION['id_user'];

    $sql=$pdo->prepare("INSERT INTO jobs (name,descrip,pago,times,id_com) 
                        VALUES (:name,:descrip,:pago,:jornada,:company);");

    $sql->bindParam(":name",$nombre);    
    $sql->bindParam(":descrip",$descripcion);    
    $sql->bindParam(":pago",$pago_d);    
    $sql->bindParam(":jornada",$jornal);
    $sql->bindParam(":company",$company);

    $sql->execute();
    header("Location: index.php");
}

?>

<div class="card">
    <div class="card-header">
        Publicar empleo
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="nombre">
            </div>

            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input type="text"
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripción">
            </div>

            <div class="mb-3">
              <label for="pago" class="form-label">Pago</label>
              <input type="text"
                class="form-control" name="pago" id="pago" aria-describedby="helpId" placeholder="pago">
            </div>

            <div class="mb-3">
              <label for="jornada" class="form-label">jornada</label>
              <input type="text"
                class="form-control" name="jornada" id="jornada" aria-describedby="helpId" placeholder="jornada">
            </div>

            <button type="submit" class="btn btn-success">Publicar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">cancelar</a>
            
        </form>
    </div>
</div>

<?php include("../../templates/footer.php")?>