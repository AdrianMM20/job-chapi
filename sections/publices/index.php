<?php 
include("../../dbjob.php");

if(isset($_GET['txtID'])){

    $txtID=$_GET['txtID'];
    $id=intval($txtID);

    $sql=$pdo->prepare("DELETE FROM jobs WHERE id=:id;");
    $sql->bindParam(":id",$id);
    $sql->execute();
}

$sql=$pdo->prepare("SELECT * FROM jobs;");
$sql->execute();
$list_publices=$sql->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="create.php" role="button">Agregar publicación</a>
    </div>
    <div class="card-body">
        
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Pago</th>
                        <th scope="col">Jornada</th>
                        <th scope="col">Fecha publicación</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list_publices as $publices){ ?>
                    <tr class="">
                        <td><?php echo $publices['id'];?></td>
                        <td><?php echo $publices['name'];?></td>
                        <td><?php echo $publices['descrip'];?></td>
                        <td><?php echo $publices['pago'];?></td>
                        <td><?php echo $publices['times'];?></td>
                        <td><?php echo $publices['publication'];?></td>
                        <td>
                            <a name="" id="" class="btn btn-warning" href="update.php?txtID=<?php echo $publices['id'];?>" role="button">editar</a>
                            <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $publices['id'];?>" role="button">eliminar</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        

    </div>
</div>

<?php include("../../templates/footer.php")?>