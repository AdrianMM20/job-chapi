<?php 

include("../../dbjob.php");

if(isset($_GET['txtID'])){

    $txtID=$_GET['txtID'];
    $id=intval($txtID);

    $sql=$pdo->prepare("SELECT * FROM jobs WHERE id=:id;");
    $sql->bindParam(":id",$id);
    $sql->execute();
    $registro=$sql->fetch(PDO::FETCH_LAZY);

    $nombre=$registro['name'];
    $descripcion=$registro['descrip'];
    $pago=$registro['pago'];
    $jornada=$registro['times'];
}

if($_POST){

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $nombre=(isset($_POST['name']))?$_POST['name']:"";
    $descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $pago=(isset($_POST['pago']))?$_POST['pago']:"";
    $jornada=(isset($_POST['jornada']))?$_POST['jornada']:"";

    $id=intval($txtID);
    $pago_d=floatval($pago);
    $jornal=intval($jornada);
    $company=1;

    $sql=$pdo->prepare("UPDATE jobs SET name=:name,
                        descrip=:descrip,
                        pago=:pago,times=:jornada,
                        id_com=:company
                        WHERE id=:id;");

    $sql->bindParam(":name",$nombre);    
    $sql->bindParam(":descrip",$descripcion);    
    $sql->bindParam(":pago",$pago_d);    
    $sql->bindParam(":jornada",$jornal);
    $sql->bindParam(":company",$company);
    $sql->bindParam(":id",$id);

    $sql->execute();
    header("Location: index.php");
}

include("../../templates/header.php")
?>

<div class="card">
    <div class="card-header">
        Editar Publicación
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-3">
              <label for="txtID" class="form-label">ID</label>
              <input readonly value="<?php echo $txtID;?>" type="text"
                class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input value="<?php echo $nombre;?>" type="text"
                class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="nombre">
            </div>

            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input value="<?php echo $descripcion;?>" type="text"
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripción">
            </div>

            <div class="mb-3">
              <label for="pago" class="form-label">Pago</label>
              <input value="<?php echo $pago;?>" type="text"
                class="form-control" name="pago" id="pago" aria-describedby="helpId" placeholder="pago">
            </div>

            <div class="mb-3">
              <label for="jornada" class="form-label">jornada</label>
              <input value="<?php echo $jornada;?>" type="text"
                class="form-control" name="jornada" id="jornada" aria-describedby="helpId" placeholder="jornada">
            </div>

            <button type="submit" class="btn btn-success">Publicar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">cancelar</a>
            
        </form>
    </div>
</div>


<?php include("../../templates/footer.php")?>