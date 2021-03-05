<?php include 'partials/header.php' ?>
<div class="contenedor">

    <form action="index.php?m=update" method="post">
    <?php foreach ($datos as $value) {?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Cedula</label>
        <input type="text" name="cedula" class="form-control" id="exampleFormControlInput1" disabled value="<?php echo $value['cedula'];?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" value="<?php echo $value['nombre'];?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Telefono</label>
        <input type="telf" name="telefono" class="form-control" id="exampleFormControlInput1" value="<?php echo $value['telefono'];?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Correo</label>
        <input type="text" name="correo" class="form-control" id="exampleFormControlInput1" value="<?php echo $value['correo'];?>">
    </div>
    <div style="margin-top:15px;" class="form-group">
        <button type="submit" class="btn btn-primary mb-2">Editar</button>
    </div>
    <?php } ?>
    </form>
</div>
<?php include 'partials/footer.php' ?>
