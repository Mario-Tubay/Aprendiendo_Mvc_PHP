<?php include 'partials/header.php' ?>

        <section >

            <img  src="asstes/images (2).jpg">
            <br>
            <img src="asstes/images (3).jpg">
            <br>
            <img src="asstes/images (4).jpg">
        </section>

        <section class="coso">
            <div >
              <form class="" action="controllador/formularioController.php?accion=insert" method="post">
                <p>Nombre: <input type="text" name="nombre" size="40"></p>
                <p>Identificacion: <input type="text" name="cedula" size="40"></p>
                <p>Correo: <input type="text" name="correo" size="40"></p>
                <p>Telefono: <input type="text" name="telefono" size="40"></p>
                <p>Metodo de pago:</p>
                <input type="radio" id="credito" name="pago" value="credito">
                <label for="credito">Crédito</label><br>
                <input type="submit" name="" value="Registrar">

                <button>CANCELAR</button>
              </form>

            </div>

        </section>


        <table>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
          </tr>
          <?php foreach ($matrizCliente as $value) {?>
            <tr>
                <td><?php echo $value["cedula"]; ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["telefono"]; ?></td>
                <td><?php echo $value["correo"]; ?></td>
            </tr>
          <?php } ?>

        </table>
<?php include 'partials/footer.php' ?>
