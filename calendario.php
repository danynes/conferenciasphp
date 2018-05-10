<?php include_once 'includes/templates/header.php';?>







    <section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>


        <?php

              try {
                require_once('includes/funciones/bd_conexion.php');
                $sql =" SELECT evento_id,nombre_evento,fecha_evento,hora_evento,cat_evento,nombre_invitado,apellido_invitado ";
                $sql .=" from eventos ";
                $sql .=" inner join categoria_evento ";
                $sql .=" on eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .=" inner join invitados ";
                $sql .=" on eventos.id_inv = invitados.invitado_id ";
                $sql .=" order by fecha_evento ";
                $resultado = $conn->query($sql);
              } catch (\Exception $e) {
                echo $e->getMessage();
              }

        ?>
        <div class="calendario">
            <?php
              while ($eventos = $resultado->fetch_assoc()){?>
                <pre>
                     <?php var_dump($eventos); ?>
                </pre>


            <<?php   }  ?>
        </div>
            <?php
                $conn->close();
             ?>


    </section>


<?php include_once 'includes/templates/footer.php';?>
