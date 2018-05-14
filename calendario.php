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
            $canlendario = array();
              while ($eventos = $resultado->fetch_assoc()){

                $fecha = $eventos['fecha_evento'];


                $evento = array(
                  'titulo' => $eventos['nombre_evento'],
                  'fecha' => $eventos['fecha_evento'],
                  'hora' => $eventos['hora_evento'],
                  'categoria' => $eventos['cat_evento'],
                  'invitado' => $eventos['nombre_invitado']." ".$eventos['apellido_invitado']
                );
                $calendario[$fecha] []=$evento;
              ?>
            <?php }  //while de fetch_assoc()?>


            <?php
            // imprime todo los Eventos
            foreach ($calendario as $dia => $lista_eventos) {?>
              <h3><i class="fa fa-calendar-alt"></i>
                <?php
                //linux
                setlocale(LC_TIME, 'es_ES.UTF-8');
                //windows
                setlocale(LC_TIME, 'spanish');
                echo strftime("%A, %d de %B del %Y", strtotime($dia) ); ?>
              </h3>
            <?php  }             ?>

                <pre>
                     <?php var_dump($calendario); ?>
                </pre>




        </div>
            <?php
                $conn->close();
             ?>


    </section>


<?php include_once 'includes/templates/footer.php';?>
